@extends('layout.template')

@section('content')

<div class="skills">
    <form method="POST" action="{{url('portfolio')}}" class="form_about_me">
        {{csrf_field()}}

        @if (\Session::has('success'))      
        <div class="alert alert-success">        
            <p>{{ \Session::get('success') }}</p>      
        </div><br />     
        @endif 
        
        <label for="skill_name">Image name:</label>
        <br/>
        <input type="text" id="image" name="image" class="in_text">
        <br/>
        <br/>

        <label for="desc">Description:</label>
        <br/>
        <input type="text" id="desc" name="description" class="in_text">
        <br/>
        <br/>

        <label for="desc">Position:</label>
        <br/>
        <input type="text" id="pos" name="position" class="in_text">
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