@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Dashboard</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Login</a></li>     
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-white">Register</a></li>     
            </ul>
        </div>
    </nav>

   <div class="container">
       <div class="row" style="margin-top: 45px">
           <div class="col-md-12 mx-auto">
               {{-- <h1 class="text-center">Hello, {{Auth::User()->name}}</h1>  --}}
               <hr>            
           </div>
       </div>
   </div> 

 @endsection