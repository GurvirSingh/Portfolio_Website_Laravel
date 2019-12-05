<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;
use App\Edu;
use App\User;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skills::all()->toArray();       
        $edu = Edu::all()->toArray(); 
        return view('skills.index', compact('skills','edu','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
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
            'skill_name' => 'required',          
            'description'=> 'required',
            'date_acquired'=> 'required',
            ]);         

            $skills = new Skills();        
            $skills->skill_name=$request->get('skill_name');        
            $skills->description=$request->get('description');  
            $skills->date_acquired=$request->get('date_acquired');   
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
        $skills = skills::find($id);        
        return view('skills.edit',compact('skills','id'));
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
            'skill_name' => 'required',          
            'description'=> 'required',
            'date_acquired'=> 'required',
            ]);        

            $skills = skills::find($id);          
            $skills->skill_name=$request->get('skill_name');        
            $skills->description=$request->get('description'); 
            $skills->date_acquired=$request->get('date_acquired');               
            $skills->save();       
            return redirect('skills')->with('success', 'Data  has been updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skills = skills::find($id);        
        $skills->delete();        
        return redirect('skills')->with('success','data has been  deleted');
    }
}
