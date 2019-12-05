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
 

        <tr>
    @foreach($portfolio as $p)
            <td><img src="{{$p['image']}}"><br/>
            <p>{{$p['description']}}</p>
            <p>{{$p['position']}}</p>
            
            @if(Auth::check() && Auth::user()->role == 'admin')
                <a href="{{action('PortfolioController@edit', $p['id'])}}" class="btn btn-warning">Edit</a>
                <form action="{{action('PortfolioController@destroy', $p['id'])}}" method="post">            
                    {{csrf_field()}}            
                    <input name="_method" type="hidden" value="DELETE">            
                    <button class="btn btn-danger" type="submit">Delete</button>          
                </form>    
                <br/></td>
            @endif
       
  
       @if($loop->iteration/3 == 1 | $loop->iteration/3 == 2 | $loop->iteration/3 == 3 | $loop->iteration/3 == 4)
            </tr>
        @endif
    
    @endforeach

</table>
@if(Auth::check() && Auth::user()->role == 'admin')
    <a href="portfolio/create" class="btn">Add Data</a>
@endif

    <br /><br /><br /><br /><br />
</div>
@endsection