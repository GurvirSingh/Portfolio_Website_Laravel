@extends('layout.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <br/><br/>  
                            <div class="col-md-6">
                                <input id="name1" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br/><br/><br/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/><br/><br/>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <br/><br/><br/>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <br/><br/><br/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/><br/><br/>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <br/><br/><br/>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <br/><br/><br/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br/><br/><br/>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <br/><br/><br/>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br/><br/><br/>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="return validate()">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validate() {
    var sluname = document.getElementById("name1").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;

    var regex_names = /[a-zA-Z ]{2,}/;
    var regex_des = /[a-zA-Z0-9% ]{2,}/;
    var regex_contact = /[0-9]{10}/;
    var regex_email = /[a-zA-Z0-9.!#$%&’*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-])/;
    var err = 0;
    if(!regex_names.test(sluname)) {
        alert("Enter Atleast 2 characters in last name");
        err++;
        return false;
    }
    if(!regex_email.test(email)) {
        alert("Enter Correct Email(eg: example@example.com)");
        err++;
        return false;
    }
    if(pass.length < 8) {
        alert("Enter 8 or more character in password");
        err++;
        return false;
    }
      if(err == 0) {
          return true;
      }
    }
</script>

@endsection
