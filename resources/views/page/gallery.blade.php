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
            <img class="absolute logo" width="90%" src="{{ asset('Images/Gallery/logo.png') }}" />
            <p class="z-10 bold text-judul title-yellow-shadow text-nowrap">MENTORING UMN <br /> GALLERY</p>
        </div>
    </div>
    <div class="section2 d-flex flex-column justify-content-center align-items-center">
        <div class="white-box box-red text-left mt-5 mb-2 my-md-5 d-flex flex-column align-items-center justify-content-center">
            <div class="mt-5 bold title-yellow-shadow ">
                <p class="text-center">PEMBEKALAN MENTOR</p>
            </div>
            <div  class="text-left light text-blue d-block d-lg-none">
                <p class="mb-0">*Click the tab to open other folder</p>
            </div>
            
            <div class="mx-5 my-lg-5 mt-3 mb-5 gallery-box">
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
                    <div class="row album g-1">
                        
                        
                    </div>

                </div>
                
            </div>
        </div>

        <div class="white-box box-yellow relative pb-1 px-2 pb-md-5 px-md-5 my-5 d-flex flex-column align-items-center justify-content-center">
            <div class="swiper mb-5">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    {{-- <div class="swiper-slide">
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
                    </div> --}}
                    <div class="swiper-slide">
                        <div class="z-10 mt-5 mb-3 bold title-yellow-shadow text-center">
                            PEMBEKALAN MENTOR 1
                        </div>
                        <video controls class="d-block mx-auto video-mentoring" class="image-content">
                            <source src="{{ asset('Images/Gallery/pembekalanmentor1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                
            </div>
            {{-- <div class="d-flex px-5 relative w-100 justify-content-center my-lg-3 my-1">
                <div class="swiper-button-prev desktop"></div>
                <div class="swiper-pagination mx-0"></div>
                <div class="swiper-button-next desktop"></div>
            </div> --}}
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

    const photos = [
            ["{{ asset('Images/Gallery/Pembekalan3/c(1).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(2).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(3).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(4).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(5).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(6).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(7).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(8).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan3/c(9).jpg') }}"
            ],
            ["{{ asset('Images/Gallery/Pembekalan2/a(1).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(2).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(3).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(4).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(5).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(6).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(7).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(8).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(9).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(10).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(11).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(12).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(13).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/a(14).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(1).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(2).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(3).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(4).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(5).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(6).jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan2/b(7).jpg') }}",
            ],
            ["{{ asset('Images/Gallery/Pembekalan1/FotbarAkhir/a.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarAkhir/b.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarAkhir/c.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarAkhir/d.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarAkhir/e.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarNarsum/1.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarNarsum/2.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarNarsum/3.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarNarsum/4.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/FotbarNarsum/5.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5063.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5065.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5064.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5066.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5067.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5068.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5069.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5070.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5071.jpg') }}",
            "{{ asset('Images/Gallery/Pembekalan1/IMG_5072.jpg') }}",
            ]
    ]

    const album = document.querySelector(".album");
    const nav = document.querySelectorAll(".pembekalan")

    document.addEventListener("DOMContentLoaded", function(event){
            photos[0].map((x)=>{
                const newPhoto = document.createElement("div");
                newPhoto.classList.add("col-6");
                newPhoto.innerHTML=`
                <img width="100%" src="${x}" />
                `
                album.appendChild(newPhoto);
            })
    });

    nav.forEach((e, index)=>{
        e.addEventListener("click", () =>{
            nav.forEach((btn) => btn.classList.remove('active'));
            e.classList.add('active');
            album.innerHTML = "";
            photos[index].map((x)=>{
                const newPhoto = document.createElement("div");
                newPhoto.classList.add("col-6");
                newPhoto.innerHTML=`
                <img width="100%" src="${x}" />
                `
                album.appendChild(newPhoto);
            })
            
        })
    })
    


</script>
@endsection