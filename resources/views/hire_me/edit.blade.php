<!DOCTYPE html>
<html>  
<head>
<meta charset="utf-8">    
<title>Laravel 5 CRUD Tutorial With Example From Scratch </title>    
<link rel="stylesheet" href="{{asset('css/app.css')}}">  
</head>  
<body>    
    <div class="container">      
    <h2>Edit A Form</h2><br/>      
    
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
    
    <form method="post" action="{{action('Hire_meController@update', $id)}}">        
        {{csrf_field()}}        
        <input name="_method" type="hidden" value="PATCH">        
        <div class="row">          
            <div class="col-md-4"></div>          
            <div class="form-group col-md-4">            
                <label for="name">Prices Name:</label>            
                <input type="text" class="form-control" name="price" value="{{$hire_me->price}}">          
            </div>        
        </div>        
        <div class="row">          
            <div class="col-md-4"></div>            
            <div class="form-group col-md-4">             
                <label for="price">service:</label>              
                <input type="text" class="form-control" name="services" value="{{$hire_me->services}}">            
            </div>          
        </div>   
        <div class="row">          
                <div class="col-md-4"></div>            
                <div class="form-group col-md-4">             
                    <label for="price">contact:</label>              
                    <input type="text" class="form-control" name="contact" value="{{$hire_me->contact}}">            
                </div>          
            </div>   
        {{-- <div class="row">          
            <div class="col-md-4"></div>            
                <div class="form-group col-md-4">             
                    <label for="price">description:</label>              
                    <input type="text" class="form-control" name="coinprice" value="{{$form->description}}">            
                </div>  
        </div>             --}}
    </div>            
    
<div class="row">          
    <div class="col-md-4"></div>          
    <div class="form-group col-md-4">            
        <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>          
    </div>        
</div>      
</form>    
</div>  
</body>
</html>