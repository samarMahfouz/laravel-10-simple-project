@extends('layouts.front')
@section('title', 'Homepage')
@section('main')
     <!-- Start Navigation Bar -->
     <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="{{route('front.index')}}">FreeWebsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#mygallery">My gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#aboutme" >About me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contactme">Contact Me</a>
                    </li>
                  </ul>
                </div>
              </div>
        </nav>
     <!-- End Navigation Bar -->
        
    <!-- Start Hero Section -->
    <section class="hero-section">
        <div id="carouselExample" class="carousel slide">
              <div class="carousel-indicators d-none text-center">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                   <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 3"></button>
                   <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 4"></button>
              </div>
          <div class="carousel-inner">
            <div class="carousel-item carousel-item1 active">
            </div>
            <div class="carousel-item carousel-item2">
            </div>
            <div class="carousel-item carousel-item3">
            </div>
            <div class="carousel-item carousel-item4">
            </div>
            <div class="carousel-item carousel-item5">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
           <a href="#aboutme" class="text-decoration-none text-light">
            <div class="scroll">
                   <span class="d-block">Scroll</span>
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            </a>
    </section>
    <!-- End Hero Section -->
        
    <!-- Start About me Section -->
    <section class="about-me" id="aboutme">
        <div class="container">
            <div class="row">
                <div class="col-md-7"> 
                    <h1 class="about-me-header">Who Am I?</h1>  
                    <img src="front/images/photographer.jpg" class="d-none min-img" alt="...">
                    @foreach($infoo as $info)
                    <p class="w-75">{{$info->info}}</p>
                     <div class="find-social">
                        <h3>Find me on:</h3>
                        <div class="social-icons">
                            <a href="{{$info->facebook}}" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f"></i></a>
                            <a href="{{$info->instagram}}" class="text-decoration-none">
                            <i class="fa-brands fa-instagram"></i></a>
                            <a href="{{$info->linkedin}}" class="text-decoration-none">
                            <i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-5">
                    <img src="front/images/photographer.jpg" class="d-block w-75 main-img" alt="...">
                </div>
            </div>
              </div>
    </section>
    <!-- End About me Section -->
        
    <!-- Start My Gallery Section -->
    <section class="my-gallery" id="mygallery">
        <h2 class="about-me-header container">My Gallery</h2>
          <div class="row">
            @foreach($articles as $article)
              <div class="col-lg-4 col-md-6">
                    <img src="{{$article->imgpath}}" alt="{{$article->imgpath}}" class="w-100 main-image">
                    <p class="hide-show">X</p>
              </div>
            @endforeach
          </div>
        <div class="text-center">
            <a href="{{route('gallery.index')}}" class="btn btn-outline-secondary view-gallery">View Gallery</a>
        </div>
    </section>
    <!-- End My Gallery Section -->
    <!-- Start Contact Me Section -->
    <section class="contact-me text-center" id="contactme">
         <div class="content">
            @foreach($infoo as $info)
                <h3 class="contact-me-header">Feel free to reach out to me</h3>
                <p class="contact-me-email">{{$info->email}}</p>
                <div class="my-social">
                     <a href="{{$info->facebook}}" class="text-decoration-none text-light">
                    <i class="fa-brands fa-facebook-f"></i></a>
                    <a href="{{$info->instagram}}" class="text-decoration-none text-light">
                    <i class="fa-brands fa-instagram"></i></a>
                    <a href="{{$info->linkedin}}" class="text-decoration-none text-light">
                    <i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            @endforeach
           </div>
        <div class="overlay"></div>
    </section>
    <!-- End Contact Me Section -->
@endsection