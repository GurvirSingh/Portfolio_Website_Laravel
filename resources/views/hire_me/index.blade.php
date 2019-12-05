@extends('layout.template')

@section('content')
<div class="hire_me_1">
        <div id="exp_content">
            <h1 id="exp_heading">HIRE ME</h1><br/>
            <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir
                Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
        </div>

        @if (\Session::has('success'))      
        <div class="alert alert-success">          
            <p>{{ \Session::get('success') }}</p>      
        </div><br />      
        @endif

        @foreach($hire_me as $form)  
        <div class="exp_date_main">
            <div class="exp_date_main_content">
                <i class="fas fa-shopping-cart fa-4x green"></i>
            </div>
            <div class="edmc_desc" id="hire_blue">
                <p>${{$form['price']}}</p>
                <p>{{$form['services']}}</p>
                <a href="contact.html">{{$form['contact']}}</a>
            </div>
        </div>
        @if(Auth::check() && Auth::user()->role == 'admin')
        <a href="{{action('Hire_meController@edit', $form['id'])}}" class="btn btn-warning">Edit</a>
        <form action="{{action('Hire_meController@destroy', $form['id'])}}" method="post">            
                {{csrf_field()}}            
                <input name="_method" type="hidden" value="DELETE">            
                <button class="btn btn-danger" type="submit">Delete</button>          
            </form>   
            
            @endif
        @endforeach  
    </div>
    @if(Auth::check() && Auth::user()->role == 'admin')
    <a href="hire_me/create" class="btn">Add Data</a>
    @endif

    <div class="skills_bars">
        <div id="exp_content">
            <h1 id="exp_heading">SKILLS AND KNOWLEDGE.</h1><br/>
            <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br />
                I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
        </div>
        <div id="software1">
            <h3>SOFTWARE</h3>
            <p>HTML</p>
            <span class="numbers">80 %</span>
            <span class="progress"></span>
            <span class="progress1"></span>
            <p>CSS</p>
            <span class="numbers1">75 %</span>
            <span class="progress"></span>
            <span class="progress2"></span>
            <p>JAVASCRIPT</p>
            <span class="numbers2">60 %</span>
            <span class="progress"></span>
            <span class="progress3"></span>
            <p>PHP</p>
            <span class="numbers3">65 %</span>
            <span class="progress"></span>
            <span class="progress4"></span>
            <p>SQL</p>
            <span class="numbers4">50 %</span>
            <span class="progress"></span>
            <span class="progress5"></span>
            <p>PHOTOSHOP</p>
            <span class="numbers5">40 %</span>
            <span class="progress"></span>
            <span class="progress6"></span>
        </div>

        <div id="softwarex">
            <h3>RECOGNITIONS</h3>
            <i class="far fa-images fa-4x rec"></i> <br/><span class="reco_text">International Design Award 15th
                April,NewYork Place Magazine</span><br/>
            <i class="fas fa-pencil-alt fa-4x rec"></i> <br/><span class="reco_text">Logo Design Award Awwwards
                Website</span><br/>
            <i class="fas fa-briefcase fa-4x rec"></i> <br/><span class="reco_text">Web Design Award June 12th, Time
                Magazine</span>
        </div>

        <div id="softwarez" style="margin-top: 10px;">
            <h3>LANGUAGE SKILLS</h3>
            <div class="round">
                <div class="round_per"></div>
                <div class="round_cover1"></div>
                <span class="round_text">SPANISH<br />Advanced</span>
            </div>

            <div class="round">
                <div class="round_per1"></div>
                <div class="round_cover2"></div>
                <span class="round_text1">HINDI<br />Experienced</span>
            </div>

            <div class="round">
                <div class="round_per2"></div>
                <div class="round_cover"></div>
                <span class="round_text2">ITALIAN<br />Beginner</span>
            </div>
        </div>

        <div id="software" style="margin-top: 50px;">
            <h3>KNOWLEDGE</h3>
            <table>
                <tr>
                    <td><i class="fas fa-check"></i> Google Analytics</td>
                    <td><i class="fas fa-check"></i> Photo Manipulation</td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i> Install And Configure </td>
                    <td><i class="fas fa-check"></i> Photo Manipulation</td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i> Digital Painting </td>
                    <td><i class="fas fa-check"></i> 3d Modeling</td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i> Photo Composition</td>
                    <td><i class="fas fa-check"></i> Photo Manipulation</td>
                </tr>
                <tr>
                    <td><i class="fas fa-check"></i> Web Usability</td>
                    <td><i class="fas fa-check"></i> Video Editing</td>
                </tr>
            </table>
        </div>

        <div id="software_bottom">
            <h2>Hobbies and Interest</h2>
            <table>
                <tr>
                    <td><i class="fas fa-dumbbell fa-3x"></i> <br /> Sports</td>
                    <td><i class="fas fa-photo-video fa-3x"></i> <br /> Photography</td>
                    <td><i class="fas fa-star fa-3x"></i></i> <br /> Modelling</td>
                    <td><i class="fas fa-film fa-3x"></i> <br /> Movies</td>
                    <td><i class="fas fa-tshirt fa-3x"></i> <br /> Fashion</td>
                    <td><i class="fab fa-sketch fa-3x"></i></i> <br /> Technology</td>
                    <td><i class="fas fa-plane fa-3x"></i> <br /> Travel</td>
                    <td><i class="fab fa-old-republic fa-3x"></i> <br /> Polo</td>
                </tr>
            </table>
        </div>

        <div class="stats">
            <div class="stats_img">
                <div class="round"><i class="fas fasstat fa-trophy fa-5x"></i></div>
                <p id="p1">1800 <br />Won</p>
                <div class="round"><i class="fas fasstat fa-thumbs-up fa-5x"></i></div>
                <p id="p2">900 <br />Happy Customers</p>
                <div class="round"><i class="fas fasstat fa-rocket fa-5x"></i></div>
                <p id="p3">220 <br />Projects Done</p>
                <div class="round"><i class="fas fasstat fa-camera-retro fa-5x"></i></div>
                <p id="p4">990 <br />Photos Made</p>
            </div>
        </div>

@endsection