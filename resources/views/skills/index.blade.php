@extends('layout.template')

@section('content')
<div class="container">    
        <br />    
        @if (\Session::has('success'))      
        <div class="alert alert-success">        
            <p>{{ \Session::get('success') }}</p>      
        </div><br />     
        @endif 
<!-- the first div -->
<div class="skills_div_1">
        <div id="class_div_left">
            <h1>SKILLS & <br />EXPERTISE</h1>
            <p id="move_up">Full Stack Developer, Programmer, UI Designer</p>
            <img src="mypic.jpeg" alt="Gurvir's Image" height="400" width="300">
        </div>
        <!-- the second div -->
        <div id="class_div_right">
            <table>
                <tr>
                    <td><i class="fas fa-paper-plane fa-3x"></i> <br /><br /> BRANDING <br /><br /> Creating Logos and Posters for your Company.</td>
                    <td><i class="fas fa-ad fa-3x"></i> <br /><br /> MARKETING <br /><br /> Trending designs for a better Layout and Design.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-pencil-alt fa-3x"></i> <br /><br /> DESIGN <br /><br /> Maintaining the quality and productivity to please my clients.</td>
                    <td><i class="fas fa-laptop-code fa-3x"></i> <br /><br /> PROGRAMMING <br /><br /> Developing applications and systems that <br /> meets the needs and streamline the work and <br />experience of the user.</td>
                </tr>
            </table>
            <h2>SMART DIGITAL SOLUTIONS - A FULL STACK DEVELOPER</h2>
            <img src="resp.png" alt="responsive devices" height="250" width="580">
        </div>
    </div>

    <section id="skills_section">
    <div id="exp_content">
        <h1 id="exp_heading">WORK EXPERIENCE</h1>
        <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
    </div>

    @foreach($skills as $form)  
   <div class='exp_date_main'>
        <div class='exp_date_main_content'>
            {{-- <p>{{$form['date_acquired']}}</p> --}}
            <p>{{$form['skill_name']}}</p>
        </div>
        
        <div class='edmc_desc'>
            <p>{{$form['description']}}</p>
        </div>
    </div>
    <a href="{{action('SkillsController@edit', $form['id'])}}" class="btn btn-warning">Edit</a>
    <form action="{{action('SkillsController@destroy', $form['id'])}}" method="post">            
        {{csrf_field()}}            
        <input name="_method" type="hidden" value="DELETE">            
        <button class="btn btn-danger" type="submit">Delete</button>          
    </form>   
    @endforeach  
    <br/>
    <a href="skills/create" class="btn">Add Data</a>
                

    <div class="skills_div_2">
    <div id="exp_content">
            <h1 id="exp_heading">Education</h1>
            <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
        </div>

        @foreach($edu as $form)  
        <div class='exp_date_main'>
             <div class='exp_date_main_content'>
                 {{-- <p>{{$form['date_acquired']}}</p> --}}
                 <p>{{$form['degree']}}</p>
             </div>
             
             <div class='edmc_desc'>
                 <p>{{$form['description']}}</p>
             </div>
         </div>
         <a href="{{action('SkillsController@edit', $form['id'])}}" class="btn btn-warning">Edit</a>
         <form action="{{action('SkillsController@destroy', $form['id'])}}" method="post">            
             {{csrf_field()}}            
             <input name="_method" type="hidden" value="DELETE">            
             <button class="btn btn-danger" type="submit">Delete</button>          
         </form>   
         @endforeach  
         <br/>
         <a href="skills/create_edu" class="btn">Add Data</a>

    </div>
</div>
</section>
@endsection

{{-- <!DOCTYPE html>
<html>  
<head>    
    <meta charset="utf-8">    
    <title>Index Page</title>    
    <link rel="stylesheet" href="{{asset('portfolio.css')}}">
</head>  

<body>    
<div class="container">    
    <br />    
    @if (\Session::has('success'))      
    <div class="alert alert-success">        
        <p>{{ \Session::get('success') }}</p>      
    </div><br />     
    @endif    
    <table class="table table-striped">    
        <thead>      
            <tr>
                <th>ID</th>        
                <th>skill_name</th>        
                <th>description</th>        
                <th>date</th>      
            </tr>    
        </thead>    
        <tbody>      
            @foreach($skills as $form)      
            <tr>        
                <td>{{$form['skill_key']}}</td>        
                <td>{{$form['skill_name']}}</td>        
                <td>{{$form['description']}}</td>    
                <td>{{$form['date_acquired']}}</td>      
                <td><a href="{{action('SkillsController@edit', $form['skill_key'])}}" class="btn btn-warning">Edit</a></td>        
                <td>          
                    <form action="{{action('SkillsController@destroy', $form['skill_key'])}}" method="post">            
                        {{csrf_field()}}            
                        <input name="_method" type="hidden" value="DELETE">            
                        <button class="btn btn-danger" type="submit">Delete</button>          
                    </form>        
                </td>      
            </tr>      
            @endforeach    
        </tbody>  
    </table>  
</div>
</body>
</html> --}}