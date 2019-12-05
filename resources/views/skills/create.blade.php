@extends('layout.template')

@section('content')
<div class="skills">
    <form method="POST" action="{{url('skills')}}" class="form_about_me">
        {{csrf_field()}}
        
        @if ($errors->any())      
        <div class="alert alert-danger">          
            <ul>              
                @foreach ($errors->all() as $error)                  
                <li>{{ $error }}</li>              
                @endforeach          
            </ul>      
        </div><br />      
        @endif      
        @if (\Session::has('success'))      
        <div class="alert alert-success">          
            <p>{{ \Session::get('success') }}</p>      
        </div><br />      
        @endif
        
        <label for="skill_name">Skill:</label>
        <br/>
        <input type="text" id="date_acquired" name="skill_name" class="in_text">
        <br/>
        <br/>

        <label for="skill_name">Date:</label>
        <br/>
        <input type="text" id="date_acquired" name="date_acquired" class="in_text">
        <br/>
        <br/>

        <label for="desc">Description:</label>
        <br/>
        <input type="text" id="desc" name="description" class="in_text">
        <br/>
        <br/>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['succ']) && $_GET['succ'] == 1) {
                echo "Entered Successfully!.";
            }
        ?>
        </p>

        <p id="email_js_valid">
        <?php 
            if(isset($_GET['succ']) && $_GET['succ'] == 2) {
                echo "Some Error Occured, Please try again later.";
            }
        ?>
        </p>
    </form>
</div>
@endsection