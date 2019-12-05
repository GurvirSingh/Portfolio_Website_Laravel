@extends('layout.template')

@section('content')
<div id="exp_content_wrapper">
    <div id="exp_content">
        <h1 id="exp_heading">MY LATEST WORK</h1><br/>
        <p id="exp_para">I'm looking to expand my portfolio while I'm on top and while <br /> I'm young Gurvir Singh Tarlok Singh Bhogal brings you content to life in stunning Quality.</p>
    </div>
    <div class="p_nav">
        <ul>
            <a href='/portfolio'><li>Show All</li></a>
            <a href='/website'><li>Websites</li></a>
            <a href='/apps'><li>Apps</li></a>
            <a href='/design'><li>Design</li></a>
            <a href='/photography'><li>Photography</li></a>
        </ul>
    </div>
    @if (\Session::has('success'))      
    <div class="alert alert-success">        
        <p>{{ \Session::get('success') }}</p>      
    </div><br />     
    @endif 

<table class='projects'>
        @foreach($portfolio as $p)
        <tr>
        @for ($i = 0; $i < 2; $i++)
                <td><img src="{{$p['image']}}"><br/>
                <p>{{$p['description']}}</p>
                <p>{{$p['position']}}</p></td>
            @endfor
        </tr>
        @endforeach
</table>

    <br /><br /><br /><br /><br />
</div>
@endsection