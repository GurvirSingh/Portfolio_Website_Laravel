<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hire_me;

class Hire_meController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hire_me = hire_me::all()->toArray();        
        return view('hire_me.index', compact('hire_me'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hire_me.create');
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
            'price' => 'required',          
            'services'=> 'required',
            'contact'=> 'required'
            ]);         

            $skills = new hire_me();        
            $skills->price=$request->get('price');        
            $skills->services=$request->get('services');   
            $skills->contact=$request->get('contact');
            $skills->save();       
            return redirect('hire_me')->with('success', 'Data  has been added successfully.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hire_me = hire_me::find($id);        
        return view('hire_me.edit',compact('hire_me','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([          
            'price' => 'required',          
            'services'=> 'required',
            'contact'=> 'required'
            ]);         
            $skills = hire_me::find($id);        
            $skills->price=$request->get('price');        
            $skills->services=$request->get('services');   
            $skills->contact=$request->get('contact');
            $skills->save();       
            return redirect('hire_me')->with('success', 'Data  has been updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = hire_me::find($id);        
        $form->delete();        
        return redirect('hire_me')->with('success','Entry has been  deleted');
    }
}
