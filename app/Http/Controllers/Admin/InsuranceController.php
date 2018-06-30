<?php

namespace App\Http\Controllers\Admin;

use App\Insurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurances = Insurance::latest()->paginate(20);
        return view('admin.insurances.all' , compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insurances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request() , [
           'name' => 'required',
            'number' => 'required|integer'
        ]);
        Insurance::create($request->all());
        return redirect('/panel/insurances');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurance $insurance)
    {
        return view('admin.insurances.edit' , compact('insurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurance $insurance)
    {
        $this->validate(request() , [
            'name' => 'required',
            'number' => 'required|integer'
        ]);
        $insurance->update($request->all());
        return redirect('panel/insurances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insurance $insurance)
    {
        $insurance->delete();
        return redirect('panel/insurances');
    }
}
