<!DOCTYPE html>
<html>  
<head>
<meta charset="utf-8">    
<title>Edit page </title>    
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
    
    <form method="post" action="{{action('PortfolioController@update', $id)}}">        
        {{csrf_field()}}        
        <input name="_method" type="hidden" value="PATCH">        
        <div class="row">          
            <div class="col-md-4"></div>          
            <div class="form-group col-md-4">            
                <label for="name">Image name:</label>            
                <input type="text" class="form-control" name="image" value="{{$skills->image}}">          
            </div>        
        </div>        
        <div class="row">          
            <div class="col-md-4"></div>            
            <div class="form-group col-md-4">             
                <label for="price">description:</label>              
                <input type="text" class="form-control" name="description" value="{{$skills->description}}">            
            </div>          
        </div>   
        <div class="row">          
            <div class="col-md-4"></div>            
                <div class="form-group col-md-4">             
                    <label for="price">position:</label>              
                    <input type="text" class="form-control" name="position" value="{{$skills->position}}">            
                </div>  
        </div>            
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