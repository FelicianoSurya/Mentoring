@extends('template.app')

<!-- link css external -->
@section('custom-css')
    <link rel="stylesheet" href="{{ url('css/about-us.css') }}">
@endsection

<!-- Coding HTML sini gais -->
@section('content')
<div class="about">
    <div class="relative bg-blue p-4 p-lg-5 pt-4 pb-1 d-flex justify-content-center">
        <img class="logo mt-2 logo img-fluid my-lg-5" src="{{ asset('Images/AboutUs/logo.png') }}" />
        <img class="absolute z-10 trails1" src="{{ asset('Images/AboutUs/trails1.png') }}" />
        <img class="absolute z-10 trails2" src="{{ asset('Images/AboutUs/trails2.png') }}" />
    </div>
    <div id="mentoring" class="bg-yellow relative d-flex flex-column align-items-center">
        <img width="100%" src="{{ asset('Images/AboutUs/tail1.png') }}" />
        <div class="mentoring text-center">
            <p class="medium text-blue mb-0">What is</p>
            <h1 class="relative bold text-blue text-shadow-red">MENTORING
                <img class="absolute " src="{{ asset('Images/AboutUs/frame.png') }}" />
            </h1>
        </div>
        <div class="judul z-100 text-center py-2">
            <p class="bold text-light z=100 mb-0">Expand Opportunities Through Your Potential</p>
        </div>
        <div class="z-100 relative text-box p-3 p-md-5 mt-3 mt-md-5">
            <p class="medium mx-lg-5 navy">Tema ini merepresentasikan perjalanan awal mahasiswa baru UMN di dunia perkuliahan yang berbeda dari sebelumnya. Mentee akan masuk dalam tahap adaptasi, di mana mereka kerap merasa tersesat dan bingung. Seperti “apa yang sebenarnya aku suka?”, “apakah jurusan ini pilihan yang tepat?”, dan “apa yang akan aku lakukan ke depannya?”. </p>
            <p class="medium mx-lg-5 mb-3 mb-md-5 navy">Terdapat beberapa pesan kunci yang Mentoring 2022 tekankan. Pertama, Mentee keluar dari zona nyamannya untuk berinovasi. Kedua, Mentee mengeksplorasi banyak hal. Terakhir, Mentee menemukan titik fokus yang akan dijadikan garis finish (goal).</p>
            <img class="absolute question bottom-left img-fluid" src="{{ asset('Images/AboutUs/frame1.png') }}" />
        </div>
        <img class="z-1 absolute zachery bottom-right img-fluid" src="{{ asset('Images/AboutUs/zachery1.png') }}" />
    </div>

    <div id="tagline" class="relative bg-blue text-center pb-5">
        <img width="100%" src="{{ asset('Images/AboutUs/tail2.png') }}" />
        <div class="judul">
            <h3 class="medium text-blue font-4 lightBold">Our</h3>
            <h1 class="bold text-blue font-7 text-shadow-yellow">TAGLINE</h1>
            <h3 class="bold text-blue font-4">“Emerge, Extend, Elevate”</h3>
        </div>
        <img class="relative z-1 top-zachery" src="{{ asset('Images/AboutUs/zachery2.png') }}"  />
        <div class="z-10 row mx-md-5 px-md-5 mx-1">
            <div class="col-12 col-xl-4 d-flex flex-column justify-content-center align-items-xl-end align-items-center">
                <div class="card ">
                    <h3 class="card-header medium text-blue">Emerge</h3>
                    <p class="p-lg-5 p-md-4 px-3 py-3 medium navy"> Mentoring menjadi wadah bagi para Mentee untuk mengenali dirinya sendiri dan apa yang menjadi ketertarikan mereka, baik itu hobi, cita-cita, dan banyak lagi. </p>
                </div>
            </div>
            <div class="col-12 col-xl-4 d-flex flex-column justify-content-center align-items-center">
                <div class="card ">
                    <h3 class="card-header medium text-blue">Extend</h3>
                    <p class="p-lg-5 p-md-4 px-3 py-3 medium navy">Mentoring hadir untuk memperluas pengalaman dan membantu Mentee mengeksplorasi potensi diri mereka. </p>
                </div>
            </div>
            <div class="z-100 col-12 col-xl-4 d-flex flex-column justify-content-center align-items-xl-start align-items-center">
                <div class="card relative">
                    <img class="absolute zachery" src="{{ asset('Images/AboutUs/zachery2.png') }}" />
                    <h3 class="card-header medium text-blue">Elevate</h3>
                    <p class="p-lg-5 p-md-4 px-3 py-3 medium navy">Setelah mengeksplorasi potensi diri, Mentee akan menemukan titik fokus dan membuat target untuk mencapainya.</p>
                </div>
            </div>
        </div>
        <img width="17%" class="absolute trails3 z-10 d-none d-lg-block" src="{{asset('Images/AboutUs/trails3.png') }}" />
    </div>

    <div id="theme" class="relative bg-yellow">
        <img class="absolute top-left" width="100%" src="{{ asset('Images/AboutUs/tail3.png') }}" />
        <div class="absolute judul text-center">
            <p class="medium text-blue mb-0 lightBold font-4">Our</p>
            <h1 class="bold text-blue font-7 text-shadow-blue">THEME</h1>
        </div>
        <img width="100%" src="{{ asset('Images/AboutUs/bg4.png') }}" />
        <div class="absolute d-flex middle text-center">
            <div class="d-flex ml-3 mr-0 ml-md-5 mr-md-2 flex-column justify-content-center align-items-center">
                <div class="circle circle-yellow p-1 p-md-3 d-flex justify-content-center align-items-center bg-blue rounded-circle">
                    <img class="img-fluid" src="{{ asset('Images/AboutUs/logoSmall.png') }}"  />
                </div>
                <p class="mt-2 mt-md-4 font-size medium text-yellow">Our logo</p>
            </div>
            <div class="d-flex mx-3 mx-md-5 flex-column justify-content-center align-items-center">
                <p class="mb-2 mb-md-4 font-size medium text-yellow">Logo<br />Minerva</p>
                <div class=" circle circle-yellow p-2 d-flex justify-content-center align-items-center bg-blue rounded-circle">
                    <img class="img-fluid" src="{{ asset('Images/AboutUs/minerva.png') }}" />
                </div>
            </div>
            <div class="d-flex mx-3 mx-md-5 flex-column justify-content-center align-items-center">
                <div class="circle circle-blue p-md-4 p-2 d-flex justify-content-center align-items-center bg-blue rounded-circle">
                    <img class="img-fluid" src="{{ asset('Images/AboutUs/colorPallete.png') }}" />
                </div>
                <p class="h6 mt-2 mt-md-4 font-size medium text-blue">Color<br/>Pallete</p>
            </div>
            <div class="d-flex ml-0 mr-3 ml-md-2 mr-md-5 flex-column justify-content-center align-items-center">
                <p class="mb-2 mb-md-4 font-size medium text-blue">Our <br/>Mascot</p>
                <div class="circle circle-blue d-flex justify-content-center align-items-center bg-blue rounded-circle">
                    <img class="img-fluid" src="{{ asset('Images/AboutUs/zachery3.png') }}" />
                </div>
            </div>
        </div>
        <p class="mx-3 lightBold text-blue d-lg-none font-2">*click the symbol for more information</p>
        <div class="box-popUp">

        </div>
        <div class="backgroundPop">

        </div>
        <img class="z-1" width="100%" src="{{ asset('Images/AboutUs/bg5.png') }}" />
    </div>

    <div id="value" class="relative bg-blue">
        <img class="z-1" width="100%" src="{{ asset('Images/AboutUs/bg6.png') }}" />
        <div class="row absolute margin-top d-flex">
            <div class="col-6 z-100 d-flex flex-column justify-content-center align-items-center">
                <img width="70%" src="{{ asset('Images/AboutUs/value.png') }}" />
                <p style="font-size:2vw" class="text-yellow medium">5C UMN</p>
                <button class="btn-learnMore text-blue lightBold bg-yellow text-nowrap px-3 px-md-5 border-0">Learn More</button>
            </div>
            <div class="col-6 z-100 margin-right">
                <img width="90%" src="{{ asset('Images/AboutUs/frame2.png') }}" />
            </div>
        </div>
        <img class="z-1 absolute top-left" width="14%" src="{{ asset('Images/AboutUs/trails4.png') }}" />
        <img class="z-10 absolute trails5" width="10%" src="{{ asset('Images/AboutUs/trails5.png') }}" />
    </div>

    <div id="committe" class="relative bg-blue p-3 p-md-5">
        <div class="m-md-5">
            <img width="100%" class="relative z-100" src="{{ asset('Images/AboutUs/divisi1.png') }}" />
            <div class="mx-5 d-flex mt-md-5 mt-4 flex-column align-items-center justify-content-center">
                <h1 class=" display-1bo  bold judul text-blue text-nowrap text-shadow-yellow">Meet the Committe</h1>
                <h5 class=" bold text-list text-blue text-nowrap text-shadow-yellow">of Mentoring UMN 2022</h5>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-4 col-md-3">
                    <img width="100%" src="{{ asset('Images/AboutUs/divisi2.png') }}" />
                </div>
                <div class="col-4 col-md-6 d-flex justify-content-center">
                    <button class="dark-blue text-light lightBold btn-learnMore text-nowrap p-2 p-md-3 px-3 px-md-5 border-0">Learn More</button>
                </div>
                <div class="col-4 col-md-3">
                    <img width="100%" src="{{ asset('Images/AboutUs/divisi3.png') }}" />
                </div>
            </div>

        </div>
        
    </div>
</div>
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>
        
        const buttons = document.querySelectorAll(".circle");
        const theme = document.querySelector(".box-popUp");
        const background = document.querySelector(".backgroundPop")
        let box_theme = document.createElement("div");

        buttons.forEach((e, index) => {
            e.addEventListener("click",() =>{
                buttons.forEach(btn => btn.classList.remove('active'));
                e.classList.add('active');
                box_theme.innerHTML = "";
                background.setAttribute("class", "bg-black");
                if($(window).width() < 768){
                    if(index == 2 || index == 3){
                        box_theme.setAttribute("style","background-size: cover; background-repeat: no-repeat;background-image: url('{{ asset('Images/AboutUs/bgPopUpSmallShort.png') }}')")
                    }else{
                        box_theme.setAttribute("style","background-size: cover; background-repeat: no-repeat;background-image: url('{{ asset('Images/AboutUs/bgPopUpSmall.png') }}')")
                    }
                }else{
                    box_theme.setAttribute("style","background-size: cover; background-repeat: no-repeat;background-image: url('{{ asset('Images/AboutUs/bgPopUp.png') }}')")
                }
                box_theme.setAttribute("class","py-5 pop-Up z-100 absolute margin-top");
                if(index === 0){box_theme.innerHTML = `
                    <div class="relative d-flex flex-column align-items-center justify-content-center">
                        <button onclick="closePopUp()" class="absolute medium d-none d-md-block button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg> Close</button>
                        <button onclick="closePopUp()" class="absolute medium d-md-none button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg></button>
                        <div class="text-center">
                            <h1 class="text-center bold md-h1 text-yellow text-shadow-red">Our Logo</h1>
                        </div>
                        <div class="row mx-2 mx-md-5 d-flex justify-content-center">
                            <div class="mr-5 col-5 d-none d-lg-inline-flex d-flex align-items-center justify-content-center">
                                <img width="100%" class="img-fluid" src="{{ asset('Images/AboutUs/logo.png') }}" />
                            </div>
                            <div class="col-lg-4 col-12 ml-5 text-box-short text-box p-4 p-md-5 d-flex flex-column align-items-center">
                                <img width="50%" class="img-fluid d-lg-none" src="{{ asset('Images/AboutUs/logo.png') }}" />
                                <div>
                                    <h6 class="bold text-list text-blue mb-0">Garis Merah</h6>
                                    <p class="text-blue">Garis merah yang berlika-liku melambangkan perjalanan eksploratif yang dilalui oleh Mentee dalam menghadapi dunia perkuliahan dengan penuh keberanian.</p>
                                    <h6 class="bold text-list text-blue mb-0">Logo Minerva</h6>
                                    <p class="text-blue">Logo Minerva menjadi poin sentral dalam logo Mentoring 2022. Penempatan logo tersebut melambangkan sejalannya kegiatan dan tujuan Mentoring 2022 dengan Minerva yang ingin menanamkan nilai-nilai 5C ke dalam diri setiap Mentee.</p>
                                    <h6 class="bold text-list text-blue mb-0">Lingkaran Merah</h6>
                                    <p class="text-blue">Lingkaran merah yang berada di tengah logo melambangkan keberanian dan tekad bulat Mentee dalam mengimplementasikan nilai 5C dalam menjalankan aktivitas, baik di dalam maupun di luar kampus.</p>
                                    <h6 class="bold text-list text-blue mb-0 text-start">Rantai dengan Ujung Terbuka</h6>
                                    <p class="text-blue">Rantai dengan ujung terbuka menyimbolkan kemampuan para Mentee untuk dapat saling mengeratkan diri dan berhubungan dengan satu sama lain tanpa membatasi potensi yang mereka miliki.</p>
                                </div>
                                
                            </div>
                        
                        </div>
                        
                    </div>
                `}
                if(index === 1){box_theme.innerHTML = `
                    <div class="relative d-flex flex-column align-items-center justify-content-center">
                        <button onclick="closePopUp()" class="absolute medium d-none d-md-block button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg> Close</button>
                        <button onclick="closePopUp()" class="absolute medium d-md-none button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg></button>
                        
                        <div>
                            <h1 class="text-center bold text-yellow text-shadow-red">Logo Minerva</h1>
                        </div>
                        <div class="row text-box d-flex justify-content-center p-3 p-md-5">
                            <div class="col-8 col-lg-5 p-2 p-md-5 d-flex justify-content-center align-items-center">
                                <img width="100%" class="img-fluid" src="{{ asset('Images/AboutUs/minervaBig.png') }}" />
                            </div>
                            <div class="col-12 col-lg-6 text-blue medium">
                                <p><strong>Logo Minerva</strong> (Mentoring Inner Value) adalah logo yang melambangkan nilai-nilai spiritual dari Mentoring UMN. Namanya sendiri terinspirasi dari sosok Dewi Minerva dari Romawi yang dikenal akan kebijaksanaan dan kepandaiannya dalam berkarya (wisdom dan craft).</p>
                                <p><strong class="text-blue">Makna Logo Minerva dari Kepribadian Dewi Minerva</strong></p>
                                <ul>
                                    <li>
                                        <p class="mb-0"><strong>The Teacher/Inventor</strong><br></p>
                                        <p style="margin-left: -35px;">Dewi Minerva melambangkan bagaimana Mentor dapat <br />mengomunikasikan pengetahuan, pengalaman, dan <br/>kebijaksanaannya kepada para Mentee.</p>
                                    </li>
                                </ul>
                                
                                <ul>
                                    <li>
                                        <p class="mb-0"><strong>The Warrior</strong></p>
                                        <p style="margin-left: -35px;">Dewi Minerva melambangkan bagaimana para Mentor dan Mentee dapat memposisikan diri mereka layaknya pejuang yang setia melaksanakan nilai-nilai kebaikan bagi almamater, persada, dan sesama.</p>
                                    </li>
                                </ul>
                                
                            </div>
                            
                        </div>
                    </div>`
                }
                if(index === 2){
                    box_theme.innerHTML = `
                    <div class="relative d-flex flex-column align-items-center justify-content-center">
                        <button onclick="closePopUp()" class="absolute medium d-none d-md-block button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg> Close</button>
                        <button onclick="closePopUp()" class="absolute medium d-md-none button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg></button>

                        <div>
                            <h1 class="text-center bold text-yellow text-shadow-red">Color Pallete</h1>
                        </div>
                        <div class="text-box p-3 p-lg-5 d-flex flex-column justify-content-center align-items-center">
                            <div class="row justify-content-center">
                                <div class="col-3 col-md-2 text-center mx-2 mx-md-5 text-blue medium  d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="{{ asset('Images/AboutUs/ellipse3.png') }}" />
                                    <br/><p class="mb-0">#BA302A</p>
                                    <p class="text-blue bold">Berani</p>
                                </div>
                                <div class="col-3 col-md-2 text-center mx-2 mx-md-5 text-blue medium  d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="{{ asset('Images/AboutUs/ellipse1.png') }}" />
                                    <br/><p class="mb-0">#F1D15E</p>
                                    <p class="text-blue bold">Semangat</p>
                                </div>
                                <div class="col-3 col-md-2 text-center mx-2 mx-md-5 text-blue medium d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="{{ asset('Images/AboutUs/ellipse2.png') }}" />
                                    <br/><p class="mb-0">#2D4FAE</p>
                                    <p class="text-blue bold text-nowrap">Jujur & Setia</p>
                                </div>
                            </div>
                            <p class="mx-2 mx-md-3 mx-lg-5 mt-3 mt-lg-4 px-lg-5 text-blue medium"><strong>Logo Mentoring UMN 2022</strong> memiliki warna-warna dasar yang mencerminkan nilai yang akan disampaikan melalui kegiatan Mentoring UMN 2022 sebagai pijakan Mentee dalam menjalani dunia perkuliahan. Warna yang divisualisasikan adalah merah, kuning, dan biru.</p>
                        </div>
                    </div>`
                }
                if(index === 3){
                    box_theme.innerHTML = `
                    <div class="relative d-flex flex-column align-items-center justify-content-center">
                        <button onclick="closePopUp()" class="absolute medium d-none d-md-block button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg> Close</button>
                        <button onclick="closePopUp()" class="absolute medium d-md-none button-close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="1.73675" height="9.89945" transform="matrix(-0.707107 0.707107 0.707107 0.707107 4.11395 2.88623)" fill="white"/>
                        <rect width="1.73675" height="9.89945" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2.88586 9.88623)" fill="white"/>
                        </svg></button>
                        
                        <div>
                            <h1 class="text-center bold text-yellow text-shadow-red">Our Mascot</h1>
                        </div>
                        <div width="100%" class="d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex mx-2 justify-content-center">
                                <div>
                                    <img width="100%" class="d-none d-md-block img-fluid" src="{{ asset('Images/AboutUs/zachery4.png') }}" />
                                </div>
                                <div>
                                    <img width="150%" class="d-none d-md-block img-fluid" src="{{ asset('Images/AboutUs/zachery5.png') }}" />
                                    <img width="150%" class="d-md-none img-fluid" src="{{ asset('Images/AboutUs/zachery7.png') }}" />
                                </div>
                                <div>
                                    <img width="100%" class="d-none d-md-block img-fluid" src="{{ asset('Images/AboutUs/zachery6.png') }}" />
                                </div>
                            </div>
                            <div class="text-box p-4">
                                <h1 class="bold text-blue text-center">Zachery</h1>
                                <p class="medium text-blue">Zachery merupakan nama yang berasal dari bahasa Latin. Zachery merupakan bentuk perwujudan dari logo Mentoring UMN 2021 yang menggambarkan sifat kejujuran, kecerdasan, dan keyakinan yang tinggi. Zachery akan menemani kalian mengarungi perjalanan panjang yang tak terlupakan.</p>
                            </div>
                        </div>
                        
                    </div>`
                }
                theme.appendChild(box_theme);
                
            } );
        });

        const closePopUp = () =>{
            buttons.forEach(btn => btn.classList.remove('active'));
            console.log("click");
            theme.innerHTML = "";
            background.classList.remove("bg-black");
        }
</script>
@endsection