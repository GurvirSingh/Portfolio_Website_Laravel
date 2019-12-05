<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signup;

class SignupController extends Controller
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
        return view('signup.create');
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
            'firstname' => 'required|regex:/^[a-zA-Z ]*$/',          
            'lastname'=> 'required|regex:/^[a-zA-Z ]*$/',
            'email'=> 'required|email:rfc|unique:signups',
            'password'=> 'required',
            'contact'=> 'required|regex:/[0-9]{10}/',
            'designation'=> 'required|regex:/^[a-zA-Z ]*$/',
        ]);         

        $Signup = new Users();        
        $Signup->firstname=$request->get('firstname');        
        $Signup->lastname=$request->get('lastname'); 
        $Signup->email=$request->get('email');
        $Signup->password=$request->get('password');
        $Signup->contact=$request->get('contact');
        $Signup->designation=$request->get('designation');           
        $Signup->save();       
        return redirect('signup/create')->with('success', 'Registered Successfully'); 
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
        //
    }
}
