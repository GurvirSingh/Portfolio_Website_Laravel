@extends('layout.template')

@section('content')

<div class="skills">
    <form method="POST" action="{{url('hire_me')}}" class="form_about_me">
        {{csrf_field()}}

        @if (\Session::has('success'))      
        <div class="alert alert-success">        
            <p>{{ \Session::get('success') }}</p>      
        </div><br />     
        @endif 
        
        <label for="skill_name">Price:</label>
        <br/>
        <input type="text" id="image" name="price" class="in_text">
        <br/>
        <br/>

        <label for="desc">Services:</label>
        <br/>
        <input type="text" id="desc" name="services" class="in_text">
        <br/>
        <br/>

        <label for="desc">Contact:</label>
        <br/>
        <input type="text" id="pos" name="contact" class="in_text">
        <br/>
        <br/>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <p id="email_js_valid">
        </p>

        <p id="email_js_valid">
        </p>
    </form>
</div>
@endsection