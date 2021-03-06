<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            'name' => 'required',          
            'email'=> 'required|email',  
            'contactno'=> 'required|numeric',      
            ]);   

            $con = new Contact();                
            $con->name=$request->get('name');     
            $con->phone=$request->get('contactno');             
            $con->email=$request->get('email');        
            $con->save();        

            $email['email'] = $request->get('name');
            $email['name'] = $request->get('email');
            $email['contactno'] = $request->get('contactno');
            Mail::send('contact.email',$email, function($msg){
                $msg->to('gurvirbhogal10@gmail.com')
                    ->subject('CONTACT FORM FOR gurvirbhogal.uta.cloud');
            });

            return redirect('contact')->with('success', 'An Email to the Admin has been sent to contact you');
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
