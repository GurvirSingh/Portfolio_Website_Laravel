@extends('layout.template')

@section('content')
<div class="signup">
    <form method="POST" action="{{url('signup')}}" class="form_about_me" novalidate>
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

        <p><strong>Sign Up To Get Full Access:</strong></p><br />

        <label for="suname">First Name:</label>
        <br/>
        <input type="text" name="suname" id="suname" class="in_text" placeholder="Enter your first name" pattern="[a-zA-Z ]{2,}" title="Text only" required>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['sname']) && $_GET['sname'] == 1) {
                echo "Invalid First Name!";
            }
        ?>
        </p>

        <label for="suname">Last Name:</label>
        <br/>
        <input type="text" name="sluname" id="sluname" class="in_text" placeholder="Enter your last name" pattern="[a-zA-Z ]{2,}" title="Text only" required>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['slname']) && $_GET['slname'] == 1) {
                echo "Invalid Last Name!";
            }
        ?>
        </p>

        <label for="loginemail">Email:</label>
        <br/>
        <input type="email" id="loginemail" name="loginemail" class="in_text" placeholder="Enter your email" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)" title="example@example.com" required>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['email']) && $_GET['email'] == 1) {
                echo "Invalid Email!";
            }
        ?>
        </p>

        <label for="pass">Password:</label>
        <br/>
        <input type="password" id="pass" name="pass" class="in_text" placeholder="Enter password(min 8 and max 20 characters)" minlength="8" maxlength="20" required>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['pass']) && $_GET['pass'] == 1) {
                echo "Invalid Password!";
            }
        ?>
        </p>

        <label for="succon">Contact:</label>
        <br/>
        <input type="text" id="succon" name="succon" class="in_text" minlength="10" maxlength="10" placeholder="Enter your contact number(eg:1234567890)" pattern="[0-9]{10}" title="Ex: 1234567890" required>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['num']) && $_GET['num'] == 1) {
                echo "Invalid Contact Number!";
            }
        ?>
        </p>
        <label for="org">Designation and Organization:</label>
        <br/>
        <input type="text" id="org" name="org" class="in_text" placeholder="Enter company name or designation" pattern="[a-zA-Z0-9% ]{2,}" title="Kindly enter two or more characters" required>
        <p id="email_js_valid">
        <?php 
            if(isset($_GET['org']) && $_GET['org'] == 1) {
                echo "Invalid Designation or Organization Name!";
            }
        ?>
        </p>



        <button type="submit" name="submit_signup" onclick="return validate()" class="btn btn-primary">Sign Up</button>

    </form>
</div>
@endsection