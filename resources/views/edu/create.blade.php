@extends('layout.template')

@section('content')
<div class="skills">
    <form method="POST" action="{{url('edu')}}" class="form_about_me">
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
        
        <label for="skill_name">Degree:</label>
        <br/>
        <input type="text" id="date_acquired" name="degree" class="in_text">
        <br/>
        <br/>

        <label for="skill_name">date:</label>
        <br/>
        <input type="text" id="date_acquired" name="date" class="in_text">
        
        <br/>
        <br/>

        <label for="desc">description:</label>
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