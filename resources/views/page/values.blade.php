@extends('template.app')

<!-- link css external -->
@section('custom-css')
<link rel="stylesheet" href="{{ url('css/value.css') }}">
@endsection

@section('content')
<div class="body">
    <div class="section1 relative">
        <img class="bg bg1 d-none d-sm-block absolute" src="{{asset('Images/Valuepage/BG_1_Value.png')}}" />
        <img class="bg bg1 d-sm-none absolute" src="{{asset('Images/Valuepage/BG_Responsive.png')}}" />
        <div class="konten relative text-center">
            <img class="logo5c" src="{{asset('Images/Valuepage/Logo_5C.png')}}" />
            <h1 class="judul blue_shadow bold">VALUE MENTORING</h1>
            <h3 class="umn_2022 medium ">UMN 2022</h3>
            <img class="maskot absolute"  src="{{asset('Images/Valuepage/Maskot_Value.png')}}" />
        </div>
    </div>
    <div class="section2 relative">
        <div class="konten text-center">
            <div class="relative">
                <img class="droplet" src="{{asset('Images/Valuepage/Droplet_5C_UMN.png')}}" />
                <h1 class="judul lightblue_shadow bold">5C UMN</h1>
            </div>
            <div>
                <p class="arti medium d-lg-none">*click the logo to see other values</p>
            </div>
            <div class="d-flex justify-content-center align-items-center mx-5">
                <div class="col-2 mx-2 mx-lg-3">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Logo_Caring.png')}}">
                </div>
                <div class="col-2 mx-2 mx-lg-3">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Logo_Credible.png')}}">
                </div>
                <div class="col-2 mx-2 mx-lg-3">
                    <img class="nilai5c " src="{{asset('Images/Valuepage/Logo_Competent.png')}}">
                </div>
                <div class="col-2 mx-2 mx-lg-3">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Competitive.png')}}">
                </div>
                <div class="col-2 mx-2 mx-lg-3">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Logo_ Customerdelight.png')}}">
                </div>
            </div>
            <div class="justify-content-center mt-5 mx-1 nilai5c-box">
            </div>
        </div>
        <img class="bg bg2" src="{{asset('Images/Valuepage/BG_2_Value.png')}}"/>
    </div>
</div>
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>
const meaning = [
            {
                nilai: "CARING",
                logo: "{{asset('Images/Valuepage/Logo5c_Caring.png')}}",
                arti: "Hati yang Terbuka",
                penjelasan: "Sikap peduli terhadap mahasiswa, para dosen dan staff, lingkungan sekitar kampus, serta masyarakat sekitar. ",
                class: "position-caring"
            },
            {
                nilai: "CREDIBLE",
                logo:"{{asset('Images/Valuepage/Logo5c_Credible.png')}}",
                arti: "Ruang Integritas",
                penjelasan:"Dapat dipercaya dan diandalkan melalui integritas dalam melaksanakan kewajibannya, aktif berorganisasi dengan mengikuti kegiatan kampus UMN, serta menjaga nama baik UMN.",
                class: "position-credible"
            },
            {
                nilai: "COMPETENT",
                logo:"{{asset('Images/Valuepage/Logo5c_Competent.png')}}",
                arti: "Gedung Pencakar Langit",
                penjelasan:"Aktif dalam perkuliahan, mengikuti organisasi untuk mengembangkan soft skills, serta mencari referensi untuk menambah pengetahuan.",
                class: "position-competent"
            },
            {
                nilai: "COMPETITIVE",
                logo:"{{asset('Images/Valuepage/Logo5c_Competitive.png')}}",
                arti: "Podium",
                penjelasan:"Berkompetisi secara sehat dalam berbagai kompetisi yang ada dan memberikan ide-ide baru yang mengembangkan kemampuan mahasiswa serta lingkungannya.",
                class: "position-competitive"
            },
            {
                nilai: "CUSTOMER DELIGHT",
                logo:"{{asset('Images/Valuepage/Logo5c_Customerdelight.png')}}",
                arti: "Tangga Naik ke Atas",
                penjelasan:"Sikap berorientasi dan antisipatif terhadap kebutuhan orang tua dengan belajar, berprestasi, dan sopan selama berada di kampus. ",
                class: "position-customerdelight"
            }
        ]
        
        const buttons = document.querySelectorAll(".nilai5c");
        const nilai5c = document.querySelector(".nilai5c-box");
        let box_nilai = document.createElement("div");
        
        buttons.forEach((e, index) => {
            e.addEventListener("click",() =>{
                buttons.forEach((btn) => btn.classList.remove('active'));
                e.classList.add('active');
                box_nilai.innerHTML = `
                <h1 class="bold lightblue_shadow nilai">
                    ${meaning[index].nilai}
                </h1>
                <h3 class="medium arti">
                    ${meaning[index].arti}
                </h3>
                <div class="text-box relative text-light">
                    <img class="absolute ${meaning[index].class}" src="${meaning[index].logo}" />
                    <p class="penjelasan">
                    ${meaning[index].penjelasan}
                    </p>
                </div>
                `

                
                nilai5c.appendChild(box_nilai);
                
            } );
        });
</script>
@endsection