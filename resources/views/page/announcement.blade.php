@extends('template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/announcement.css') }}">
@endsection

@section('content')
<div class="d-flex flex-column justify-content-start align-items-center text-center overflow-x-hidden">

    {{-- SECTION-1 --}}
    <div class="section-1 relative">
        {{-- IMAGE --}}
        <img class="bg-1" src="{{ asset('Images/Announcement/BG_Announcement.png') }}">
        
        <h1 class="title-1">SPECIAL<br>ANNOUNCEMENT</h1>
        <p class="subtitle-1">ON MENTORING UMN 2022</p>

        <div class="announcement-top relative">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators ann-indc">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner news-carousel">
                    <div class="carousel-item active">
                        <div class="d-block w-75 mx-auto announcement-content">
                            <h1 class="announcement-inner">Lorem Ipsum</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-75 mx-auto announcement-content">
                            <h1 class="announcement-inner">Lorem Ipsum</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-block w-75 mx-auto announcement-content">
                            <h1 class="announcement-inner">Lorem Ipsum</h1>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <img src="{{ asset('Images/Announcement/Button_Left.png') }}" class="arrow-news arr-left" aria-hidden="true">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <img src="{{ asset('Images/Announcement/Button_Right.png') }}" class="arrow-news arr-right" aria-hidden="true">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <img class="announcement-box d-flex mx-auto" src="{{ asset('Images/Announcement/announcement_box.png') }}">
            <img class="bell" src="{{ asset('Images/Announcement/Bell.png') }}" alt="vektor_left">
            <img class="maskot-box" src="{{ asset('Images/Announcement/Maskot.png') }}" alt="vektor_maskot">
        </div>

        <img class="trail-1" src="{{ asset('Images/Announcement/Trail_1.png') }}" alt="vektor_trail">

        <h1 class="title-2">PREVIOUS</h1>
        <p class="subtitle-2">ANNOUNCEMENT</p>

        <div class="box-bottom relative">
            <p class="date">Friday, 2 May 2022</p>
            <div class="child-box relative overflow-hidden">
                <h1 class="ann-title">Lorem Ipsum</h1>
                <p class="ann-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#"><button class="btn btn-open">Open</button></a>
                <img class="speaker" src="{{ asset('Images/Announcement/Speaker.png') }}">
                <img class="vector-left" src="{{ asset('Images/Announcement/Vector_left.png') }}">
                <img class="vector-right" src="{{ asset('Images/Announcement/Vector_right.png') }}">
                <img class="trail-left" src="{{ asset('Images/Announcement/Trail_left.png') }}">
                <img class="trail-right" src="{{ asset('Images/Announcement/Trail_right.png') }}">
            </div>
            <div class="child-box relative overflow-hidden">
                <h1 class="ann-title">Lorem Ipsum</h1>
                <p class="ann-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#"><button class="btn btn-open">Open</button></a>
                <img class="speaker" src="{{ asset('Images/Announcement/Speaker.png') }}">
                <img class="vector-left" src="{{ asset('Images/Announcement/Vector_left.png') }}">
                <img class="vector-right" src="{{ asset('Images/Announcement/Vector_right.png') }}">
                <img class="trail-left" src="{{ asset('Images/Announcement/Trail_left.png') }}">
                <img class="trail-right" src="{{ asset('Images/Announcement/Trail_right.png') }}">
            </div>
        </div>

        <div class="box-bottom relative">
            <p class="date">Monday, 2 April 2022</p>
            <div class="child-box relative overflow-hidden">
                <h1 class="ann-title">Lorem Ipsum</h1>
                <p class="ann-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#"><button class="btn btn-open">Open</button></a>
                <img class="speaker" src="{{ asset('Images/Announcement/Speaker.png') }}">
                <img class="vector-left" src="{{ asset('Images/Announcement/Vector_left.png') }}">
                <img class="vector-right" src="{{ asset('Images/Announcement/Vector_right.png') }}">
                <img class="trail-left" src="{{ asset('Images/Announcement/Trail_left.png') }}">
                <img class="trail-right" src="{{ asset('Images/Announcement/Trail_right.png') }}">
            </div>
            <div class="child-box relative overflow-hidden">
                <h1 class="ann-title">Lorem Ipsum</h1>
                <p class="ann-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#"><button class="btn btn-open">Open</button></a>
                <img class="speaker" src="{{ asset('Images/Announcement/Speaker.png') }}">
                <img class="vector-left" src="{{ asset('Images/Announcement/Vector_left.png') }}">
                <img class="vector-right" src="{{ asset('Images/Announcement/Vector_right.png') }}">
                <img class="trail-left" src="{{ asset('Images/Announcement/Trail_left.png') }}">
                <img class="trail-right" src="{{ asset('Images/Announcement/Trail_right.png') }}">
            </div>
            <div class="child-box relative overflow-hidden">
                <h1 class="ann-title">Lorem Ipsum</h1>
                <p class="ann-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <a href="#"><button class="btn btn-open">Open</button></a>
                <img class="speaker" src="{{ asset('Images/Announcement/Speaker.png') }}">
                <img class="vector-left" src="{{ asset('Images/Announcement/Vector_left.png') }}">
                <img class="vector-right" src="{{ asset('Images/Announcement/Vector_right.png') }}">
                <img class="trail-left" src="{{ asset('Images/Announcement/Trail_left.png') }}">
                <img class="trail-right" src="{{ asset('Images/Announcement/Trail_right.png') }}">
            </div>
        </div>

        <img class="bg-foot" src="{{ asset('Images/Announcement/BG_Announcement2.png') }}">
    </div>
    {{-- END OF SECTION 1 --}}
</div>
@endsection