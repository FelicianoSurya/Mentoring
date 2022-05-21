@extends('template.app')

<!-- link css external -->
@section('custom-css')
<link rel="stylesheet" href="{{ url('css/value.css') }}">
@endsection

@section('content')
<div class="body">
<div class="section1">
        <img class="bg bg1 absolute" src="{{asset('Images/Valuepage/BG 1_Value.png')}}">
        <div class="content relative text-center">
            <img class="logo5c" src="{{asset('Images/Valuepage/Logo 5C.png')}}" />
            <h1 class="judul blue_shadow bold">VALUE MENTORING</h1>
            <h3 class="umn_2022 medium">UMN 2022</h3>
            <img class="maskot absolute"  src="{{asset('Images/Valuepage/Maskot_Value.png')}}" />
        </div>
    </div>
    <div class="section2">
        <div class="relative content text-center">
            <div>
                <img class="absolute droplet" src="{{asset('Images/Valuepage/Droplet_5C UMN.png')}}" />
                <h1 class="judul lightblue_shadow bold">5C UMN</h1>
            </div>
            <div class="row mx-5">
                <div class="col-1">      
                </div>
                <div class="col-2">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Logo Caring.png')}}">
                </div>
                <div class="col-2">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Logo Credible.png')}}">
                </div>
                <div class="col-2">
                    <img class="nilai5c " src="{{asset('Images/Valuepage/Logo Competent.png')}}">
                </div>
                <div class="col-2">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Competitive.png')}}">
                </div>
                <div class="col-2">
                    <img class="nilai5c" src="{{asset('Images/Valuepage/Logo Customer delight.png')}}">
                </div>
                <div class="col-1">
                </div>
            </div>
            <div class="row justify-content-center mt-5 nilai5c-box">
                
            </div>
        </div>
        <img class="bg bg2 absolute" src="{{asset('Images/Valuepage/BG 2_Value.png')}}"/>
    </div>
</div>
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>
const meaning = [
            {
                nilai: "CARING",
                logo: "{{asset('Images/Valuepage/Logo5C-caring.png')}}",
                arti: "Hati yang Terbuka",
                penjelasan: "Sikap peduli terhadap mahasiswa, para dosen dan staff, lingkungan sekitar kampus, serta masyarakat sekitar. ",
                class: "position-caring"
            },
            {
                nilai: "CREDIBLE",
                logo:"{{asset('Images/Valuepage/Logo5C-credible.png')}}",
                arti: "Ruang Integritas",
                penjelasan:"Dapat dipercaya dan diandalkan melalui integritas dalam melaksanakan kewajibannya, aktif berorganisasi dengan mengikuti kegiatan kampus UMN, serta menjaga nama baik UMN.",
                class: "position-credible"
            },
            {
                nilai: "COMPETENT",
                logo:"{{asset('Images/Valuepage/Logo5C-competent.png')}}",
                arti: "Gedung Pencakar Langit",
                penjelasan:"Aktif dalam perkuliahan, mengikuti organisasi untuk mengembangkan soft skills, serta mencari referensi untuk menambah pengetahuan.",
                class: "position-competent"
            },
            {
                nilai: "COMPETITIVE",
                logo:"{{asset('Images/Valuepage/Logo5C-competitive.png')}}",
                arti: "Podium",
                penjelasan:"Berkompetisi secara sehat dalam berbagai kompetisi yang ada dan memberikan ide-ide baru yang mengembangkan kemampuan mahasiswa serta lingkungannya.",
                class: "position-competitive"
            },
            {
                nilai: "CUSTOMER DELIGHT",
                logo:"{{asset('Images/Valuepage/Logo5c-customerdelight.png')}}",
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