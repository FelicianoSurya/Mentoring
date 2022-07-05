@extends('template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ url('css/home.css') }}">
@endsection

@section('content')

<div class="body relative">
    <img class="absolute bg-left" src="{{ asset('Images/Homepage/section_2_vektor_left.png') }}" alt="vektor_left">
    <img class="absolute bg-right" src="{{ asset('Images/Homepage/section_2_vektor_right.png') }}" alt="vektor_right">   
    <div class="section-1 relative d-flex flex-column justify-content-center align-items-center">
        <!-- ------------------------------------vektor desktop---------------------------------------------------- -->
        <img class="absolute vektor_left" src="{{ asset('Images/Homepage/section_1_vektor_left.png') }}" width="40%" alt="vektor_left">
        <img class="absolute vektor_right" src="{{ asset('Images/Homepage/section_1_vektor_right.png') }}" width="40%" alt="vektor_right">
        <img class="absolute vektor_bawah" src="{{ asset('Images/Homepage/section_1_vektor_bawah.png') }}" width="40%" alt="vektor_bawah">
        <!-- ------------------------------------------------------------------------------------------------------- -->

        <img src="{{ asset('Images/Homepage/logo.png') }}" alt="logoHome" width="40%">
        <div class="d-flex flex-column align-items-center justify-content-center relative">
            <img class="absolute doplet_home" src="{{ asset('Images/Homepage/doplet_home.png') }}" width="130%" alt="doplet_home">
            <p class="subjudul medium">WELCOME TO</p>
            <h1 class="judul yellow_shadow bold">MENTORING</h1>
            <h1 class="yellow_shadow bold umn_2022">UMN 2022</h1>
        </div>
    </div>
    <div class="section-2 relative d-flex flex-column justify-content-center align-items-center">
        <!-- ------------------------------------vektor desktop---------------------------------------------------- -->
         <img class="absolute vektor_bawah" src="{{ asset('Images/Homepage/section_2_vektor_bawah.png') }}" width="9%" alt="vektor_bawah">
        <!-- ------------------------------------------------------------------------------------------------------- -->

        <h1 class="bold judul">ANNOUNCEMENT</h1>
        <p class="medium subjudul">ABOUT MENTORING 2022</p>
        <div class="box_annoucement d-flex flex-column align-items-center relative p-lg-5 mt-5 p-2">    
            <img class="absolute bell" src="{{ asset('Images/Homepage/Bell_icon.png') }}" alt="vektor_left">
            <img class="absolute maskot_announcement" src="{{ asset('Images/Homepage/vektor_announcement.png') }}" alt="vektor_right">
            <div class="box_annoucement_content d-flex flex-column align-items-center py-lg-4 pt-5 pb-3 mb-lg-5 mb-2 w-100 relative">
                <!-- mobile bg -->
                <img class="absolute mobile vektor_top_left" src="{{ asset('Images/Homepage/bg_announce_left_top.png') }}" alt="top_left" width="100%">
                <img class="absolute mobile vektor_bot_left" src="{{ asset('Images/Homepage/bg_announce_left_bottom.png') }}" alt="top_left" width="40%">
                <img class="absolute mobile vektor_top_right" style="z-index:100;" src="{{ asset('Images/Homepage/bg_announce_right_top.png') }}" alt="top_left" width="40%">
                <img class="absolute mobile vektor_bot_right" src="{{ asset('Images/Homepage/bg_announce_right_bottom.png') }}" alt="top_left" width="100%">
                
                <!-- desktop bg -->
                <img class="absolute desktop vektor_top_left" src="{{ asset('Images/Homepage/desktop_bg_announce_left_top.png') }}" alt="top_left" width="200vw">
                <img class="absolute desktop vektor_bot_left" src="{{ asset('Images/Homepage/desktop_bg_announce_left_bottom.png') }}" alt="top_left" width="150vw">
                <img class="absolute desktop vektor_top_right" style="z-index:100;" src="{{ asset('Images/Homepage/desktop_bg_announce_right_top.png') }}" alt="top_left" width="270vw">
                <img class="absolute desktop vektor_bot_right" src="{{ asset('Images/Homepage/desktop_bg_announce_right_bottom.png') }}" alt="top_left" width="230vw">
                
                <h1 class="bold text-center mt-1 index" style="color:#2D4FAE">SPECIAL ANNOUNCEMENT</h1>
                <h2 style="color:#B73429;" class="w-100 text-center"><u>Essential Survival Supplies</u></h2>
                <p class="text-center annouce_text mt-lg-5 mb-lg-0 mb-4 w-100" style="color:#2D4FAE;z-index:1000">Available at 21 August 2022 (00:00 WIB)</p>
            </div>
            <button class="btn btn-lg desktop px-5">See More</button>
        </div>
        <button class="btn btn-md mobile px-5 mt-3">See More</button>
    </div>
    <div class="section-3 d-flex flex-column align-items-center justify-content-center relative px-lg-5 px-3">
    <h1 class="bold p-4 mobile" style="color:#F0D061;font-size:8vw;">NEWS</h1>
    <img class="absolute vektor_bawah" src="{{ asset('Images/Homepage/section_3_vektor_bawah.png') }}" alt="vektor_left" width="40%">
    <img class="absolute vektor_left_bawah vektor_9" src="{{ asset('Images/Homepage/section_3_vektor_left.png') }}" alt="vektor_left">
    <img class="absolute vektor_right_bawah vektor_9" src="{{ asset('Images/Homepage/section_3_vektor_right.png') }}" alt="vektor_left">
        <div class="d-flex justify-content-center">
            <div class="relative d-flex flex-column align-items-center justify-content-center box_news py-1 px-lg-5 px-2">
                <img class="absolute vektor_camera" src="{{ asset('Images/Homepage/camera.png') }}" alt="vektor_left" width="15%">
                <div class="row w-100 d-flex align-items-center">
                    <div class="col-5 p-0 d-flex align-items-center">
                        <div class="circle m-2" style="background-color:#3654A3;"></div>
                        <div class="circle m-2" style="background-color:#8EC2E9;"></div>
                        <div class="circle m-2" style="background-color:#B73429;"></div>
                    </div>
                    <div class="col-6 p-0">
                        <p class="m-0 bold judul desktop">News</p>
                    </div>
                </div>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Images/Homepage/4.png') }}" class="image-content">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('Images/Homepage/4.png') }}" class="image-content">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('Images/Homepage/4.png') }}" class="image-content">
                        </div>
                    </div>
                        <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="d-flex relative w-100 justify-content-center my-lg-3 my-1 desktop">
                    <div class="swiper-button-prev desktop"></div>
                    <button class="btn btn-lg btn-danger px-3 px-lg-5 desktop">Learn More</button>
                    <div class="swiper-button-next desktop"></div>
                </div>
            </div>
        </div>        
        <button class="btn btn-md mt-3 mobile btn-danger px-4 px-lg-5 navy bold" style="background-color:#F0D061;">Learn More</button>
    </div>
    <div class="section-4 relative d-flex flex-column align-items-center">
        <!-- vektor -->
        <img class="absolute vektor_left vektor_9" src="{{ asset('Images/Homepage/section_4_vektor_left.png') }}" alt="vektor_left">
        <img class="absolute vektor_right vektor_9" src="{{ asset('Images/Homepage/section_4_vektor_right.png') }}" alt="vektor_left">
        <img class="absolute vektor_bawah" src="{{ asset('Images/Homepage/section_4_vektor_bawah.png') }}" alt="vektor_left" width="40%">
        <img class="absolute vektor_left_bawah" src="{{ asset('Images/Homepage/section_4_left_bawah.png') }}" alt="vektor_left" width="40%">
        <img class="absolute vektor_right_bawah" src="{{ asset('Images/Homepage/section_4_right_bawah.png') }}" alt="vektor_left" width="40%">

        <img src="{{ asset('Images/Homepage/logo.png') }}" class="logo">
        <div class="d-flex flex-column align-items-center justify-content-center relative">
            <img class="absolute droplet_about" src="{{ asset('Images/Homepage/droplet_about.png') }}" alt="doplet_home">
            <h1 class="judul yellow_shadow bold">ABOUT</h1>
            <h1 class="mt-2 yellow_shadow bold subjudul">MENTORING UMN 2022</h1>
            <p class="mt-3 medium">Character Building Mentoring UMN merupakan kegiatan tahunan yang bersifat wajib bagi Mentee (Mahasiswa Baru UMN) dengan tujuan memperkenalkan nilai-nilai 5C UMN secara mendalam. Dalam kegiatan ini, para Mentee akan melakukan aktivitas-aktivitas edukatif didampingi oleh Mentor (Mahasiswa UMN) yang akan mempersiapkan mereka untuk menjadi pribadi yang siap mengimplementasikan nilai-nilai 5C UMN, baik di dalam maupun di luar kampus.</p>
            <button class="btn btn-lg-lg btn-md px-4 px-lg-5">Learn More</button>
        </div>
    </div>
</div>


@endsection

@section('custom-js')
<script>
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
    
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
</script>
@endsection