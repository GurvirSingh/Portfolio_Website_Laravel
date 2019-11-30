@extends('layout.template')

@section('content')
<div class="login">
  <form method="POST" action="login1.php" class="form_about_me" novalidate>
      <p><strong>Login Using Your Email and Password:</strong></p><br />

      <label for="loginemail">Email:</label>
      <br/>
      <input type="email" id="loginemail" name="loginemail" class="in_text" placeholder="Enter your email" 
      pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)" title="example@example.com" required>
      <p id="email_js_valid">
      <?php 
          if(isset($_GET['email']) && $_GET['email'] == 1) {
              echo "Invalid Email!";
          }
      ?>
      </p>
      <br />
      <br/>

      <label for="pass">Password:</label>
      <br/>
      <input type="password" id="pass" name="pass" class="in_text" 
      placeholder="Enter password(min 8 and max 20 characters)" minlength="8" maxlength="20" required>
      <p id="pass_js_valid">
      <?php 
          if(isset($_GET['pass']) && $_GET['pass'] == 1) {
              echo "Invalid Password!";
          }
      ?>
      </p>
      <br/>
      <br/>

      <a href="#"><u>Forgot Password</u></a>
      <br /><br />

      <button type="submit" name="submit" class="btn btn-primary" onclick="return validate()">Login</button>

  </form>
</div>
@endsection