@extends('template.app')

<!-- link css external -->
@section('custom-css')
<link rel="stylesheet" href="{{ url('css/gallery.css') }}">
@endsection

<!-- Coding HTML sini gais -->
@section('content')
<div id="gallery">
    <div class="relative section1">
        <img width="100%" class="absolute top-right" src="{{ asset('Images/Gallery/vektor-top.png') }}" />
        <img width="100%" class="absolute bottom-left" src="{{ asset('Images/Gallery/vektor-bottom.png') }}" />
        <img width="100%"class="filter" src="{{ asset('Images/Gallery/background-1.png') }}"/>
        
        <div class="absolute kontent z-10 text-center ">
            <img class="absolute logo" width="80%" src="{{ asset('Images/Gallery/logo.png') }}" />
            <p class="z-10 bold text-judul title-yellow-shadow text-nowrap">MENTORING UMN <br /> GALLERY</p>
        </div>
    </div>
    <div class="section2 d-flex flex-column justify-content-center align-items-center">
        <div class="white-box my-5 d-flex flex-column align-items-center justify-content-center">
            <div class="z-10 mt-5  bold title-yellow-shadow text-center">
                PEMBEKALAN MENTOR
            </div>
            <div class="mx-5 my-5 gallery-box">
                <div class="nav">
                    <div class="px-2 py-1 px-md-3 py-md-3 active pembekalan">
                        Pembekalan Mentor 3
                    </div>
                    <div class="px-2 py-1 px-md-3 py-md-3 pembekalan-2 pembekalan">
                        Pembekalan Mentor 2
                    </div>
                    <div class="px-2 py-1 px-md-3 py-md-3 pembekalan">
                        Pembekalan Mentor 1
                    </div>
                </div>
                <div class="p-3">
                    <div class="row album">
                        <div class="col-6">
                            <img class="photo" width="100%" src="{{ asset('Images/Gallery/photo1.png') }}" />
                        </div>
                        <div class="col-6">
                            <img class="photo" width="100%" src="{{ asset('Images/Gallery/photo2.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo3.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo4.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo1.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo2.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo3.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo4.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo1.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo2.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo3.png') }}" />
                        </div>
                        <div class="col-6">
                            <img width="100%" src="{{ asset('Images/Gallery/photo4.png') }}" />
                        </div>
                        
                    </div>

                </div>
                
            </div>
        </div>

        <div class="white-box relative pb-5 px-5 my-5 d-flex flex-column align-items-center justify-content-center">
            <div class="swiper mb-5">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="z-10 mt-5 mb-3 bold title-yellow-shadow text-center">
                            PEMBEKALAN MENTOR 3
                        </div>
                        <img src="{{ asset('Images/Gallery/video.png') }}" class="image-content">
                    </div>
                    <div class="swiper-slide">
                        <div class="z-10 mt-5 mb-3 bold title-yellow-shadow text-center">
                            PEMBEKALAN MENTOR 2
                        </div>
                        <img src="{{ asset('Images/Gallery/video.png') }}" class="image-content">
                    </div>
                    <div class="swiper-slide">
                        <div class="z-10 mt-5 mb-3 bold title-yellow-shadow text-center">
                            PEMBEKALAN MENTOR 1
                        </div>
                        <img src="{{ asset('Images/Gallery/video.png') }}" class="image-content">
                    </div>
                </div>
                
            </div>
            <div class="d-flex px-5 relative w-100 justify-content-center my-lg-3 my-1">
                <div class="swiper-button-prev desktop"></div>
                <div class="swiper-pagination mx-0"></div>
                <div class="swiper-button-next desktop"></div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Script javascriptnya disini gais -->
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

    const photo1 = [
            "{{ asset('Images/Gallery/photo3.png') }}",
            "{{ asset('Images/Gallery/photo2.png') }}",
            "{{ asset('Images/Gallery/photo1.png') }}",
            "{{ asset('Images/Gallery/photo4.png') }}",
        ]

    const photo2 = 
        [
            "{{ asset('Images/Gallery/photo2.png') }}",
            "{{ asset('Images/Gallery/photo2.png') }}",
            "{{ asset('Images/Gallery/photo2.png') }}",
            "{{ asset('Images/Gallery/photo2.png') }}",
            "{{ asset('Images/Gallery/photo2.png') }}",
            "{{ asset('Images/Gallery/photo2.png') }}",
        ]
    const photo3 =
        [
            "{{ asset('Images/Gallery/photo4.png') }}",
            "{{ asset('Images/Gallery/photo4.png') }}",
            "{{ asset('Images/Gallery/photo4.png') }}",
            "{{ asset('Images/Gallery/photo4.png') }}",
        ]
    

    const album = document.querySelector(".album");
    const nav = document.querySelectorAll(".pembekalan")
    nav.forEach((e, index)=>{
        e.addEventListener("click", () =>{
            nav.forEach((btn) => btn.classList.remove('active'));
            e.classList.add('active');
            album.innerHTML = "";
            album.innerHTML = `${
                photo1.map((x)=>{
                    `
                    <div class="col-6">
                            <img width="100%" src=${x} />
                    </div>
                    `
                })
            }`;
        })
    })
    
</script>
@endsection