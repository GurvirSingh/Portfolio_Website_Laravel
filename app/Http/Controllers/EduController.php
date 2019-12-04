<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edu;

class EduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edu.create');
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
            'degree' => 'required',          
            'description'=> 'required',
            'date' => 'required',
            ]);         

            $skills = new Edu();        
            $skills->degree=$request->get('degree');        
            $skills->description=$request->get('description');  
            $skills->date=$request->get('date');            
            $skills->save();       
            return redirect('skills')->with('success', 'Data  has been added successfully.'); 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Edu::find($id);        
        $form->delete();        
        return redirect('skills')->with('success','Edu Credentials has been  deleted');
    }
}
