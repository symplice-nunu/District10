<?php

namespace App\Http\Controllers;

use App\Models\District10;
use Illuminate\Http\Request;

class District10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district10 = District10::latest()->paginate(5);
    
        return view('district10.index',compact('district10'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('district10.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'companyname' => 'required',
            'emailaddress' => 'required',
            'chapter' => 'required',
            'position' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'website' => 'required',
            'image' => 'required',
        ]);
    
        District10::create($request->all());
     
        return redirect()->route('district10.index')
                        ->with('success','New Chapter Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District10  $district10
     * @return \Illuminate\Http\Response
     */
    public function show(District10 $district10)
    {
        return view('district10.show',compact('district10'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District10  $district10
     * @return \Illuminate\Http\Response
     */
    public function edit(District10 $district10)
    {
        return view('district10.edit',compact('district10'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District10  $district10
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District10 $district10)
    {
        $request->validate([
            'companyname' => 'required',
        ]);
    
        $district10->update($request->all());
    
        return redirect()->route('district10.index')
                        ->with('success','Chapter updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District10  $district10
     * @return \Illuminate\Http\Response
     */
    public function destroy(District10 $district10)
    {
        $district10->delete();
    
        return redirect()->route('district10.index')
                        ->with('success','Chapter deleted successfully');
    
    }
}
