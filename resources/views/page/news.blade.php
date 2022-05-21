@extends('template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/news.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-column justify-content-start align-items-center text-center overflow-x-hidden">

        {{-- SECTION-1 --}}
        <div class="section-1 relative">
            <div class="row">
                {{-- Images --}}
                <div class="col-md-6">
                    <img class="mentoring-logo" src="{{ asset('Images/News/Mentoring.png') }}">
                    <img class="trail-1" src="{{ asset('Images/News/Trail 1_News.png') }}">
                    <img class="trail-2" src="{{ asset('Images/News/Trail 2_News.png') }}">
                    <img class="vector-1" src="{{ asset('Images/News/Vector-1.png') }}">
                </div>
                
                <div class="title col-md-6">
                    <h1 class="content-title text-start">This is<br>Our Journey</h1>
                    <p class="content-desc text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet nulla lectus ut nisl eget mus neque lacus risus. Elementum, egestas amet, ultrices libero amet fermentum, aliquam. Sed fermentum amet enim massa.</p>
                </div>
    
                <h1 class="title-2">NEWS</h1>
            </div>
        </div>
        {{-- END OF SECTION-1 --}}

        {{-- SECTION-2 --}}
        <div class="section-2">
            <p class="content-news">WHAT HAPPEN IN MENTORING UMN 2022</p>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner news-carousel">
                  <div class="carousel-item active">
                    <img src="{{ asset('Images/News/Frame 17.png') }}" class="d-block w-75 mx-auto">
                    <div class="carousel-caption carousel-desc-1">
                      <h5 class="carousel-caption-header">Pembekalan Mentoring Day 1</h5>
                      <p class="carousel-caption-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nisl porttitor nibh quisque eu nibh pulvinar. Molestie in amet, consequat phasellus malesuada dignissim. Facilisi tincidunt sed vulputate aliquet interdum tincidunt. Orci mauris, dignissim donec metus</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('Images/News/Frame 19.png') }}" class="d-block w-75 mx-auto">
                    <div class="carousel-caption">
                      <h5 class="carousel-caption-header">Pembekalan Mentoring Day 2</h5>
                      <p class="carousel-caption-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nisl porttitor nibh quisque eu nibh pulvinar. Molestie in amet, consequat phasellus malesuada dignissim. Facilisi tincidunt sed vulputate aliquet interdum tincidunt. Orci mauris, dignissim donec metus</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('Images/News/Frame 19.png') }}" class="d-block w-75 mx-auto">
                    <div class="carousel-caption">
                      <h5 class="carousel-caption-header">Pembekalan Mentoring Day 3</h5>
                      <p class="carousel-caption-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nisl porttitor nibh quisque eu nibh pulvinar. Molestie in amet, consequat phasellus malesuada dignissim. Facilisi tincidunt sed vulputate aliquet interdum tincidunt. Orci mauris, dignissim donec metus</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <img src="{{ asset('Images/News/Left_Button.png') }}" class="carousel-control-prev-icon prev-news" aria-hidden="true">
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <img src="{{ asset('Images/News/Right_Button.png') }}" class="carousel-control-next-icon next-news" aria-hidden="true">
                  <span class="visually-hidden">Next</span>
                </button>
                
                {{-- IMAGE --}}
                <img class="news-box d-flex mx-auto" src="{{ asset('Images/News/Picture Box_News.png') }}">
            </div>
        </div>
        {{-- END OF SECTION-2 --}}

        {{-- SECTION-3 --}}
        <div class="section-3">
            <a href="https://www.youtube.com" class="d-block mx-auto video-mentoring height-40"></a>
  
            {{-- IMAGE --}}
            <img class="vector-3-top" src="{{ asset('Images/News/BG 3_News-Top.png') }}">
            <img class="vector-3-bottom" src="{{ asset('Images/News/BG 3_News-Bottom.png') }}">
            <img class="trail-3" src="{{ asset('Images/News/Trail 3_News.png') }}">
            <img class="video-border" src="{{ asset('Images/News/Video border.png') }}">
            <img src="{{ asset('Images/News/Frame 20.png') }}" class="d-block mx-auto video-mentoring">
          </div>
        {{-- END OF SECTION-3 --}}

        {{-- MID SECTION 3-TO-4 --}}
        <div class="section-inter">
            <h1 class="title-4">GALLERY</h1>
  
            {{-- IMAGE --}}
            <img class="trail-4" src="{{ asset('Images/News/Trail 4_News.png') }}">
          </div>
        {{-- END OF MID SECTION --}}
  
        {{-- SECTION-4 --}}
          <div class="section-4">
            <p class="content-4">MENTORING UMN</p>
  
            {{-- IMAGE --}}
            <div class="relative box-news">
              <img src="{{ asset('Images/News/Frame 19.png') }}" class="news-hero">
              <img src="{{ asset('Images/News/Frame 19.png') }}" class="news-child left-img">
              <img src="{{ asset('Images/News/Frame 19.png') }}" class="news-child">
              <img src="{{ asset('Images/News/Frame 19.png') }}" class="news-child left-img">
              <img src="{{ asset('Images/News/Frame 19.png') }}" class="news-child">
              <button class="btn btn-primary see-more">See More</button>
            </div>

          </div>
        {{-- END OF SECTION-4 --}}

        {{-- SECTION-5 --}}
        <div class="section-5">
          <h1 class="title-5">OUR MEMORY</h1>
          <img class="trail-5" src="{{ asset('Images/News/Trail 5_News.png') }}">
          <img class="vector-5" src="{{ asset('Images/News/Vector.png') }}">
          <img class="vector-bottom" src="{{ asset('Images/News/Vector-5-bottom.png') }}">

          <div class="box-memory text-center">
            <div class="box-memory-hover z-5 box-memory-1">
              <button class="btn btn-warning position-absolute bottom-0 start-50 translate-middle-x mb-4">Learn More</button>
            </div>
            <div class="box-memory-hover z-4 box-memory-2">
              <button class="btn btn-warning position-absolute bottom-0 start-50 translate-middle-x mb-4">Learn More</button>
            </div>
            <div class="box-memory-hover z-3 box-memory-3">
              <button class="btn btn-warning position-absolute bottom-0 start-50 translate-middle-x mb-4">Learn More</button>
            </div>
            <div class="box-memory-hover z-2 box-memory-4">
              <button class="btn btn-warning position-absolute bottom-0 start-50 translate-middle-x mb-4">Learn More</button>
            </div>
            <div class="box-memory-hover z-1 box-memory-5">
              <button class="btn btn-warning position-absolute bottom-0 start-50 translate-middle-x mb-4">Learn More</button>
            </div>
          </div>
        </div>
        {{-- END OF SECTION-5 --}}

        {{-- ANOTHER SECTION --}}
        @include('template.footer')
    </div>
@endsection