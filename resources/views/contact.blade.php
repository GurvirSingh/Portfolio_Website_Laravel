@extends('layout.template')

@section('content')
<div class="cust1">
    <h1>MY CUSTOMERS</h1><br/>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <img src="logo.gif">
</div>


<div class="cust2">
    <h1>Contact Me</h1>
    <p id="pro">Have a project you like to discuss.</p>
    <div class="contact">
        <form method="POST" action="contact.php" class="form_about_me" novalidate>
        <p>To Contact Me Please Fill The Form Below:</p>
            <label for="cfName">Name:</label>
            <br/>
            <input type="text" id="cfName" name="cfName" class="in_text" placeholder="Enter your full name" pattern="[a-zA-Z ]{2,}" title="Text only" required>
            <p id="email_js_valid">
            <?php 
                if(isset($_GET['sname']) && $_GET['sname'] == 1) {
                    echo "Invalid Input Name!";
                }
            ?>
            </p>
            <br/>
            <br/>

            <label for="cemail">Email:</label>
            <br/>
            <input type="email" id="cemail" name="cemail" class="in_text" placeholder="Enter your email" pattern="[a-zA-Z0-9._]+@[a-zA-Z0-9.-]+.[a-z]{2,}" title="example@example.com" required>
            <p id="email_js_valid">
            <?php 
                if(isset($_GET['email']) && $_GET['email'] == 1) {
                    echo "Invalid Email!";
                }
            ?>
            </p>
            <br/>
            <br/>

            <label for="ccon">Contact:</label>
            <br/>
            <input type="text" id="ccon" name="ccon" class="in_text" minlength="10" maxlength="10" placeholder="Enter your contact number" pattern="[0-9]{10}" title="Ex: 1234567890" required>
            <p id="email_js_valid">
            <?php 
                if(isset($_GET['num']) && $_GET['num'] == 1) {
                    echo "Invalid Contact Number!";
                }
            ?>
            <?php 
                if(isset($_GET['succ']) && $_GET['succ'] == 1) {
                    echo "An Email has been sent to the admin to contact you as soon as possible!";
                }
            ?>
            </p>
            <br/>
            <br/>

            <button type="submit" name="submit" class="btn btn-primary" onclick="return validate()">Submit</button>

        </form>
    </div>
</div>

<script>
    function validate() {
    var name = document.getElementById("cfName").value;
    var email = document.getElementById("cemail").value;
    var contact = document.getElementById("ccon").value;

    var regex_names = /[a-zA-Z ]{2,}/;
    var regex_contact = /[0-9]{10}/;
    var regex_email = /[a-zA-Z0-9.!#$%&’*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-])/;
    var err = 0;
    if(!regex_names.test(name)) {
        alert("Enter Atleast 2 characters in last name");
        err++;
        return false;
    }
    if(!regex_email.test(email)) {
        alert("Enter Correct Email(eg: example@example.com)");
        err++;
        return false;
    }
    if(!regex_contact.test(contact)){
        alert("Enter only 10 Digits in Contact Number");
        err++;
        return false;
    }
    if(err == 0) {
        return true;
    }
    }
</script>
@endsection