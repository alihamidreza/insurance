<?php

namespace App\Http\Controllers;

use App\Insurance;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SoapClient;

class InsuranceController extends Controller
{
    protected $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';

    public function index()
    {
        $insurances = Insurance::all();
        return view('insurance.index', compact('insurances'));
    }

    public function update(Request $request, Insurance $insurance)
    {
        if (auth()->check()) {
            auth()->user()->insurances()->syncWithoutDetaching($request->insurance);
            return back();
        }
        return back();
    }

    public function payment()
    {
        $this->validate(request(), [
            'insurance' => 'required'
        ]);

        $insurance = Insurance::findOrFail(request('insurance'));
        $checkExist = DB::table('insurance_user')->where('user_id' , auth()->user()->id)->where('insurance_id' , $insurance->id)->first();

        if($checkExist != null){
            return redirect('/addInsurance')->with('exist' , 'شما این بیمه نامه را قبلا خریداری کرده اید.');
        }
        if ($insurance->price == 0) {
            return redirect('/addInsurance')->with('noPrice', 'بیمه قابل خریداری نیست!');
        }

        $Amount = $insurance->price;
        $Description = $insurance->name;
        $Email = auth()->user()->email;
        $CallbackURL = 'insurance/payment/checker';

        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
            [
                'MerchantID' => $this->MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'CallbackURL' => $CallbackURL,
            ]
        );

        if ($result->Status == 100) {

            auth()->user()->payments()->create([
                'resnumber' => $result->Authority,
                'price' => $Amount,
                'insurance_id' => $insurance->id
            ]);

            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        } else {
            return redirect('/addInsurance')->with('failed' , 'خطایی رخ داده است . بیمه اضافه نشد.');
        }
    }

    public function checker()
    {
        $Authority = request('Authority');
        $payment = Payment::whereResnumber($Authority)->firstOrFail();
        $insurance = Insurance::findOrFail($payment->insurance_id);

        if (request('Status') == 'OK') {

            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $payment->price,
                ]
            );

            if ($result->Status == 100) {
                if ($this->AddInsurance($payment , $insurance)){
                    return redirect('/addInsurance')->with('success' , 'بیمه نامه برای شما اضافه شد.');
                }
            } else {
                return redirect('/addInsurance')->with('failed' , 'خطایی رخ داده است . بیمه اضافه نشد.');
            }
        } else {
            return redirect('/addInsurance')->with('cancel' , 'خرید توسط شما لغو شد.');
        }

    }

    public function AddInsurance($payment , $insurance)
    {
        $payment->update([
            'resnumber' => 1
        ]);

        auth()->user()->payments()->sync($insurance->id);

        return true;
    }
}
