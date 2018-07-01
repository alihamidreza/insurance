<?php

namespace App\Http\Controllers;

use App\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        $insurances = Insurance::all();
        return view('insurance.index', compact('insurances'));
    }
    public function update(Request $request , Insurance $insurance)
    {
        if (auth()->check()){
            auth()->user()->insurances()->syncWithoutDetaching($request->insurance);
            return back();
        }
        return back();
    }
}
