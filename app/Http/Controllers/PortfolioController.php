<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all()->toArray();       
        return view('portfolio.index', compact('portfolio'));
    }
    public function index_website()
    {
        $portfolio = Portfolio::all()->toArray();       
        return view('portfolio.website', compact('portfolio'));
    }
    public function index_apps()
    {
        $portfolio = Portfolio::all()->toArray();       
        return view('portfolio.apps', compact('portfolio'));
    }
    public function index_design()
    {
        $portfolio = Portfolio::all()->toArray();       
        return view('portfolio.design', compact('portfolio'));
    }
    public function index_photography()
    {
        $portfolio = Portfolio::all()->toArray();       
        return view('portfolio.photography', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
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
            'image' => 'required',          
            'description'=> 'required',  
            'position'=> 'required',      
            ]);   

            $con = new Portfolio();                
            $con->image=$request->get('image');     
            $con->description=$request->get('description');             
            $con->position=$request->get('position');        
            $con->save();        
            return redirect('portfolio')->with('success', 'Added successfully');
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
        $skills = Portfolio::find($id);        
        return view('portfolio.edit',compact('skills','id'));
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
            'image' => 'required',          
            'description'=> 'required',
            'position'=> 'required',
            ]);        

            $skills = Portfolio::find($id);          
            $skills->image=$request->get('image');        
            $skills->description=$request->get('description'); 
            $skills->position=$request->get('position');               
            $skills->save();       
            return redirect('portfolio')->with('success', 'Data  has been updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skills = Portfolio::find($id);        
        $skills->delete();        
        return redirect('portfolio')->with('success','data has been  deleted');
    }
}
