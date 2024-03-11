@extends('layouts.front')
@section('title', 'Gallery')
@section('main')
       <!-- Start Navigation Bar -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="{{route('front.index')}}">FreeWebsite</a>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                </div>
              </div>
        </nav>
        <!-- End Navigation Bar -->
        
        <!-- Start My Gallery Section -->
        <section class="my-gallery text-center">
            <h2 class="about-me-header container">My Gallery</h2>
            <div class="row">
              @foreach($articles as $article)
               <div class="col-lg-4 col-md-6">
                        <img src="{{$article->imgpath}}" alt="{{$article->imgpath}}" class="w-100 main-image">
                        <p class="hide-show">X</p>
                  </div>
              @endforeach
            </div>            
               </section>
        <!-- End My Gallery Section -->
        
@endsection