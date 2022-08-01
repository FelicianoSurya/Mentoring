@extends('template.app')

<!-- link css external -->
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/page/committee.css') }}">
@endsection

<!-- Coding HTML sini gais -->
@section('content')
<div class="body">
    <div class="section-1">
        <img src="{{ asset('Images/Committee/image-top.png') }}" width="100%" alt="">
    </div>
    <div class="section-2 mt-5 d-flex flex-column">
        <div class="mentor bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-5 ps-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/Mentor/Logo_Mentor.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">MENTOR</h1>
                    <p class="content-desc desktop">Teman-teman dari divisi Mentor adalah mereka yang menemani dan membimbing para Mentee secara langsung di seluruh rangkaian kegiatan Mentoring UMN 2022. Sesuai namanya, para Mentor akan mengarahkan dan menyampaikan informasi serta materi kepada Mentee agar dapat memahami nilai 5C UMN dan menerapkannya dengan baik.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-mentor flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="mentor">
            <img src="{{ asset('Images/Committee/Mentor/bg_content_mentor.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#mentor" aria-expanded="false" aria-controls="mentor">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/Mentor/content_logo_mentor.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Teman-teman dari divisi Mentor adalah mereka yang menemani dan membimbing para Mentee secara langsung di seluruh rangkaian kegiatan Mentoring UMN 2022. Sesuai namanya, para Mentor akan mengarahkan dan menyampaikan informasi serta materi kepada Mentee agar dapat memahami nilai 5C UMN dan menerapkannya dengan baik.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Archer.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Jason Oktavian</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Archer</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Adeline Regina W</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Christine Angela C</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jessica Angelin</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jovelin</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Kelvin Triantovel</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Koong Pok</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Lois Maria</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Matius Damier R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Maura Nadiena P</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Shenon Fitriana</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Vanessa Chu</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Vella Octania</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Viorentina</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Archer.png') }}" alt="">    
                    </div>     
                </div>  
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Blacksmith.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Victoria Glory H</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Blacksmith</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Angel Marchella</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Aurelius Ivan</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Devani Hizkia</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Felicia Elsa D</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Felicia Margaretha</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Joanne Aster B</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Josephine Arella</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Karmelia Equeena</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Obed alexander</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rachel Letisya</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Stefanie Lunardy</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Steven Natanael</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Teresa Tesalonika</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Vina Aulia Wiguna</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Blacksmith.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Cavalry.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Cindy Areta</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Cavalry</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Alessandra Calista</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Andrew Joe</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Cristin Natalia K</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Felicea Lie</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Fernando Devano</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">January Reza J</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jessyta Kandowangko</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Joshua Hasbi</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Kathleen Ruth W</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Marcelline Tjhin</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Selvi Natalia</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Troy Gunawan</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Cavalry.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Enchanter.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Daniel Kurniawan</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Enchanter</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Asher Novraoctans J</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Brooklyn Racquella L</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Chelsy Sutanto</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Dani Muhammad L</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Felicia Agustine</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Felicia Felita R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Joan Noverlianto</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Kesya Febriana M</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Salwa Putri R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Su ping</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Wita Merly A</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Zefanya Febrina V M</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Enchanter.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Guardian.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Marcellino Ryan S</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Guardian</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Arnetha Alicya H</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Belby Agatha</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Brilliana Thalia W</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Carla Eleanor</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Gabriella Tanzil</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Justin</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Martisha Arianna F</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nathanael Rio</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Ni Kadek Laura M</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rilla Kaneishya</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Samiya Humaira A S</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Wynnie Saputri J</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Guardian.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Hunter.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Adeline Grace K</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Hunter</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Areta Escalonia C</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Audy Devanty</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Aurelio Bryant A</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Eggi Lazuardi</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Gabriella Christina L</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jesslyn Angelina</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Lucrecia Lucas W</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nadya Elsyafira</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Naira Vega K</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Reginald Ulysses</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Zahra Mutiara A</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Hunter.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Healer.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Kayyisa Fatimah A</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Healer</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Bianca Nicolette </p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jason Christian S</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jessie Elisa I</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jovianie Daniella S</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Lanang Bahy R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Natasza Ramadhani</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nathania Felicia G</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Patricia Zarzycka</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rasya Salsabila H</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Riyan Chintama</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Sakha Yenov T P</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Selma Sekar S</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Stephany Esternd L</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Wilcoustine Qhristmas</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Healer.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Musketeer.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Virahni Maranatha W</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Musketeer</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Angelica Oktavia Z</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Aura Lintang</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Cafrizky</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Elisia Widya S</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Fransiska Szelica</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Karisma Juwita</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Lie Sui Ket</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Michelle Angela P</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nathania Angelica</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Prisilla Natalia</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rachma Azahra R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rioji Michael</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Musketeer.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Observer.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Caterine Goh</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Observer</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Agil Wira P</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Beatrice Angellie</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Cosmas Damiano</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Muhammad Kalevi</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nadzwa Alifiya F</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nicholas Carlos</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rachel Cristabel</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rindu Amalia</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Ruth Yusiana</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Steviana Hermanto</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Theresia Susanto</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Whitney Kamisa</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Yemima Engklinita</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Observer.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Sorcerer.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Fiona Lavinia</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Sorcerer</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Alysa Angel W</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Aveline Jantika</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Clara Ajeng P</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Cristophorus Tritama</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Evelyn Chanry</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Felisia Agata</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jonathan Samuel</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Juli Yanti</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Pio Suriananta N</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Rafael Putra H</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Ruth Marcellia S</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Silvia Theresia O</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Tabitha Christina</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Sorcerer.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Strategist.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Felicia Ivana T</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Strategist</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Abelia Vidya</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Angelica Rosalie</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Bernadette Christie G</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Cynthia Jonathan</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Denison Tandanu</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Fredericko Zein K</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Giovann Byanca</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Kesya Sunjoyo</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Naila Zaneta R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Salwa Anindiza R</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Shabelita Luisa</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Terranova Salfina P</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Yoko Chondro</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Strategist.png') }}" alt="">    
                    </div>     
                </div>
                <div class="box-kelompok shadow-mentor w-100 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-4 col-lg-4">
                        <img class="image-ketua-mentor" src="{{ asset('Images/Committee/member/Mentor/Koor/Koor_Warior.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Bernadia Anggita A</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="row col-3 col-lg-3 ps-lg-0 ps-3 list_mentor">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Warrior</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Aflahul Hartsna K</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Alifiah Azzahra</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Angelica Koeswanto</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Austin Angelo</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Jocelyne</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Malika Putri A</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Pricilla Angel W</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Pricillia Rusli</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Stephanie Christy </p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Theresa Putri K</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Tricia</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Vienda Magdalena S</p>
                    </div> 
                    <div class="col-5 col-lg-5 d-flex justify-content-start align-items-center">
                        <img class="image-anggota-mentor" src="{{ asset('Images/Committee/member/Mentor/Warior.png') }}" alt="">    
                    </div>     
                </div>
            </div>
        </div>
        <div class="close close_mentor py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_mentor" data-bs-toggle="collapse" data-bs-target="#mentor" aria-expanded="false" aria-controls="mentor">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>

        {{-- CC --}}

        <div class="cc bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/CC/Logo_CC.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">CONTENT CREATOR</h1>
                    <p class="content-desc desktop">Divisi Content Creator adalah divisi acara dari kegiatan Mentoring 2022. Semua konsep dan aktivitas selama Mentoring UMN 2022 berasal dari hasil brainstorming teman-teman divisi Content Creator. Tanpa ide-ide dan konsep seru dari mereka, kegiatan Mentoring UMN 2022 tidak akan seseru ini, lho..</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-cc flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="cc">
            <img src="{{ asset('Images/Committee/bg_content/CC_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#cc
                " aria-expanded="false" aria-controls="cc">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/CC_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Divisi Content Creator adalah divisi acara dari kegiatan Mentoring 2022. Semua konsep dan aktivitas selama Mentoring UMN 2022 berasal dari hasil brainstorming teman-teman divisi Content Creator. Tanpa ide-ide dan konsep seru dari mereka, kegiatan Mentoring UMN 2022 tidak akan seseru ini, lho..</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-cc p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_CC.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Carissa R, Livia F. H, Adrix S.</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/CC.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Jonathan S, Caroline N, Vanessa Anabelle H, Olivia Laurent, Milka Angela, Seanna Kalista T</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_cc py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_cc" data-bs-toggle="collapse" data-bs-target="#cc" aria-expanded="false" aria-controls="cc">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>

        {{-- Admin --}}

        <div class="admin bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Admin.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">ADMINISTRATION</h1>
                    <p class="content-desc desktop">Divisi Administration adalah divisi yang memastikan kehadiran para panitia, Mentor, dan Mentee selama seluruh rangkaian kegiatan Mentoring UMN 2022 berlangsung. Teman-teman divisi Administration akan mendata terkait perizinan absensi dan juga pengelompokan Mentee Mentoring UMN 2022 agar kegiatan ini dapat berjalan tertib dan lancar.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-admin flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="admin">
            <img src="{{ asset('Images/Committee/bg_content/Admin_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#admin" aria-expanded="false" aria-controls="admin">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Admin_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Divisi Administration adalah divisi yang memastikan kehadiran para panitia, Mentor, dan Mentee selama seluruh rangkaian kegiatan Mentoring UMN 2022 berlangsung. Teman-teman divisi Administration akan mendata terkait perizinan absensi dan juga pengelompokan Mentee Mentoring UMN 2022 agar kegiatan ini dapat berjalan tertib dan lancar.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-admin p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_ADM.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Angeline Wijanarko</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/ADM.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Angellica Roberts H, Josephine Melinda G, Ricky Noel, 
                                Gervasius Geovan, Cindy Febriani S, Titadella Ramadhina</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_admin py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_admin" data-bs-toggle="collapse" data-bs-target="#admin" aria-expanded="false" aria-controls="admin">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>

{{-- Accom --}}

        <div class="accom bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Akomodasi.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">ACCOMODATION</h1>
                    <p class="content-desc desktop">Divisi Accommodation adalah divisi perlengkapan untuk kegiatan Mentoring UMN 2022. Seperti namanya, teman-teman dari divisi Accommodation memastikan seluruh kebutuhan teman-teman divisi lain, Mentor, dan juga Mentee terpenuhi. Mulai dari ruangan-ruangan yang dipakai, mic dan sound system, dan perlengkapan lainnya, semua disediakan oleh teman-teman dari divisi Accommodation.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-accom flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="accom">
            <img src="{{ asset('Images/Committee/bg_content/Accomodation_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#accom" aria-expanded="false" aria-controls="accom">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Accomodation_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Divisi Accommodation adalah divisi perlengkapan untuk kegiatan Mentoring UMN 2022. Seperti namanya, teman-teman dari divisi Accommodation memastikan seluruh kebutuhan teman-teman divisi lain, Mentor, dan juga Mentee terpenuhi. Mulai dari ruangan-ruangan yang dipakai, mic dan sound system, dan perlengkapan lainnya, semua disediakan oleh teman-teman dari divisi Accommodation.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-accom p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_Accom.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Angga Framudya Sahroni</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/Accom.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Ardyanto Konstantin, Immanuel Ardell H, Jason Kurniawan, Juily, Juan Vincent S.U, Lee Hwa Dong, Nayasha Clarisa D, Vannessa Angelica</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_accom py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_accom" data-bs-toggle="collapse" data-bs-target="#accom" aria-expanded="false" aria-controls="accom">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>

        {{-- WEB --}}
        <div class="web bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Web.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">WEBSITE</h1>
                    <p class="content-desc desktop">Penasaran gak sih siapa orang-orang hebat yang berada di balik website keren yang lagi kalian lihat saat ini? Website ini tidak akan terwujud kalau tidak ada teman-teman dari dari divisi Website dong tentunya. Melalui website ini, teman-teman divisi Website berupaya menyampaikan informasi-informasi penting mengenai kegiatan Mentoring UMN 2022 agar dapat diakses dengan mudah oleh teman-teman semua.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-web flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="web">
            <img src="{{ asset('Images/Committee/bg_content/Web_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#web" aria-expanded="false" aria-controls="web">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Web_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Penasaran gak sih siapa orang-orang hebat yang berada di balik website keren yang lagi kalian lihat saat ini? Website ini tidak akan terwujud kalau tidak ada teman-teman dari dari divisi Website dong tentunya. Melalui website ini, teman-teman divisi Website berupaya menyampaikan informasi-informasi penting mengenai kegiatan Mentoring UMN 2022 agar dapat diakses dengan mudah oleh teman-teman semua.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-web p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Website_Koor.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Feliciano Surya Marcello</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/Website.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Geraldo Nathanael, Koong Hiap, Fedora Nathania R, 
                                Vallencius Gavriel Alfredo Siswanto.</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_web py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_web" data-bs-toggle="collapse" data-bs-target="#web" aria-expanded="false" aria-controls="web">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>

        {{-- EXC --}}
        <div class="ec bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_EC.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">EXECUTIVE COMMITTEE</h1>
                    <p class="content-desc desktop">Executive Committee atau yang biasa dikenal dengan sebutan Badan Pengurus Harian (BPH) kegiatan Mentoring UMN 2022 adalah pengurus utama seluruh rangkaian kegiatan Character Building Mentoring UMN 2022. Teman-teman dari Executive Committee memonitor segala urusan dari seluruh divisi termasuk Mentor, dan juga para Mentee selama kegiatan Mentoring UMN 2022 berlangsung.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-ec flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="ec">
            <img src="{{ asset('Images/Committee/bg_content/Ec_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#ec" aria-expanded="false" aria-controls="ec">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/EC_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Executive Committee atau yang biasa dikenal dengan sebutan Badan Pengurus Harian (BPH) kegiatan Mentoring UMN 2022 adalah pengurus utama seluruh rangkaian kegiatan Character Building Mentoring UMN 2022. Teman-teman dari Executive Committee memonitor segala urusan dari seluruh divisi termasuk Mentor, dan juga para Mentee selama kegiatan Mentoring UMN 2022 berlangsung.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-ec p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Nama Ketua</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_ec py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_ec" data-bs-toggle="collapse" data-bs-target="#ec" aria-expanded="false" aria-controls="ec">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>

        {{-- DOKUM --}}

        <div class="dokum bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Dokum.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">DOCUMENTATION</h1>
                    <p class="content-desc desktop">Siapa yang fotonya sudah pernah muncul atau gak sabar banget untuk muncul di Instagram @mentoringumn, nih?? Nah, foto-foto dan video yang dibagikan di media sosial kami berasal dari hasil jepretan keren teman-teman divisi Documentation, lho. Kalau bertemu teman-teman divisi Documentation, siap-siap bergaya, yaa!!</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-dokum flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="dokum">
            <img src="{{ asset('Images/Committee/bg_content/Dokum_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#dokum" aria-expanded="false" aria-controls="dokum">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Dokum_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Siapa yang fotonya sudah pernah muncul atau gak sabar banget untuk muncul di Instagram @mentoringumn, nih?? Nah, foto-foto dan video yang dibagikan di media sosial kami berasal dari hasil jepretan keren teman-teman divisi Documentation, lho. Kalau bertemu teman-teman divisi Documentation, siap-siap bergaya, yaa!!</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-dokum p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_Dokum.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">M. Prima F & Diana A.</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/Dokum.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Margareth Ritonga, Raysa Kay W, 
                                Alden Jonathan, Ravalen Virginia, Penelope Shen.</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_dokum py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_dokum" data-bs-toggle="collapse" data-bs-target="#dokum" aria-expanded="false" aria-controls="dokum">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>
        {{-- VISUAL --}}

        <div class="visual bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Visual.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">VISUAL</h1>
                    <p class="content-desc desktop">Siapa yang suka banget sama design presentation atau tampilan konten Instagram Mentoring UMN 2022? Nah, di balik semua tampilan konten yang keren-keren tersebut, ada teman-teman dari divisi Visual, nih, yang merealisasikan ide dan konsep dari kegiatan Mentoring UMN 2022. Tanpa mereka, tentunya kegiatan Mentoring UMN 2022 tidak akan penuh asset warna-warni seperti sekarang ini, lho.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-visual flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="visual">
            <img src="{{ asset('Images/Committee/bg_content/Visual_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#visual" aria-expanded="false" aria-controls="visual">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Visual_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Siapa yang suka banget sama design presentation atau tampilan konten Instagram Mentoring UMN 2022? Nah, di balik semua tampilan konten yang keren-keren tersebut, ada teman-teman dari divisi Visual, nih, yang merealisasikan ide dan konsep dari kegiatan Mentoring UMN 2022. Tanpa mereka, tentunya kegiatan Mentoring UMN 2022 tidak akan penuh asset warna-warni seperti sekarang ini, lho.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-visual p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_Visual.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Angelina Lim</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/Visual.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Patricia Theodora, Beatrice Xaviera, 
                                Mikhaela Satyawan, Kyoko Marvella Christy.</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_visual py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_visual" data-bs-toggle="collapse" data-bs-target="#visual" aria-expanded="false" aria-controls="visual">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>
        {{-- PR & MP --}}

        <div class="prmr bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_PRMR.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">PR & MEDIA PARTNER</h1>
                    <p class="content-desc desktop">Siapa nih yang kalau mencari informasi terkini tentang Mentoring UMN langsung DM Instagram Mentoring? Nah, yang membalas pertanyaan-pertanyaan kalian adalah teman-teman dari divisi Public Relations, lho. Selain mengatur DM Instagram, semua konten Instagram @mentoringumn berasal dari rancangan teman-teman divisi Public Relations. Tidak hanya itu, segala bentuk informasi, baik kepada internal maupun eksternal disampaikan secara langsung oleh divisi Public Relations.<br>Pada divisi Media Partner sendiri merupakan divisi yang menjalin kerja sama khusus dengan pihak-pihak media kampus yang ada di UMN. Dengan menjalin kerja sama dan kesepakatan dengan media kampus internal, teman-teman divisi Media Partner berupaya untuk menyebarkan informasi terkait kegiatan Mentoring UMN 2022 sehingga sampai ke telinga mahasiswa UMN, termasuk para Mentee, Mentor, dan panitia divisi lainnya.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-prmr flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="prmr">
            <img src="{{ asset('Images/Committee/bg_content/PRMR_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#prmr" aria-expanded="false" aria-controls="prmr">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/PRMR_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Siapa nih yang kalau mencari informasi terkini tentang Mentoring UMN langsung DM Instagram Mentoring? Nah, yang membalas pertanyaan-pertanyaan kalian adalah teman-teman dari divisi Public Relations, lho. Selain mengatur DM Instagram, semua konten Instagram @mentoringumn berasal dari rancangan teman-teman divisi Public Relations. Tidak hanya itu, segala bentuk informasi, baik kepada internal maupun eksternal disampaikan secara langsung oleh divisi Public Relations.<br>Pada divisi Media Partner sendiri merupakan divisi yang menjalin kerja sama khusus dengan pihak-pihak media kampus yang ada di UMN. Dengan menjalin kerja sama dan kesepakatan dengan media kampus internal, teman-teman divisi Media Partner berupaya untuk menyebarkan informasi terkait kegiatan Mentoring UMN 2022 sehingga sampai ke telinga mahasiswa UMN, termasuk para Mentee, Mentor, dan panitia divisi lainnya.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-prmr p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_PRMR.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Annisa W, Celine Y, Tanya K.H</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/PR_MR.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Betari Naratayaka, Devara Ivan M, Kalila Sakan T, Rosalia Amanda, Zahwa Danela S</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_prmr py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_prmr" data-bs-toggle="collapse" data-bs-target="#prmr" aria-expanded="false" aria-controls="prmr">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>
        {{-- Research --}}

        <div class="research bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Research.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">RESEARCH</h1>
                    <p class="content-desc desktop">Divisi Research adalah divisi yang menangani seluruh evaluasi, pre-test, dan post-test dalam setiap rangkaian kegiatan Mentoring UMN 2022. Evaluasi dari teman-teman divisi Research akan mengembangkan kegiatan Mentoring UMN menjadi lebih baik seiring dengan respons yang diterima dari para partisipan kegiatan Mentoring UMN 2022.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-research flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="research">
            <img src="{{ asset('Images/Committee/bg_content/Research_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#research" aria-expanded="false" aria-controls="research">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Research_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Divisi Research adalah divisi yang menangani seluruh evaluasi, pre-test, dan post-test dalam setiap rangkaian kegiatan Mentoring UMN 2022. Evaluasi dari teman-teman divisi Research akan mengembangkan kegiatan Mentoring UMN menjadi lebih baik seiring dengan respons yang diterima dari para partisipan kegiatan Mentoring UMN 2022.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-research p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_Research.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Hesly Nova Angelica</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/Research.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Natasha Evangelista, Unknown Name, 
                                Juanita Grania Gabriella</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_research py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_research" data-bs-toggle="collapse" data-bs-target="#research" aria-expanded="false" aria-controls="research">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>
        {{-- Insurer --}}

        <div class="insurer bg_divisi relative p-lg-5">
            <div class="d-flex rowjustify-content-center align-items-center m-lg-5 m-2">
                <div class="col-3 d-flex justify-content-center ps-lg-2 index">
                    <img class="index image_logo_divisi" src="{{ asset('Images/Committee/logo_divisi/Logo_Insurer.png') }}" alt="">
                </div>
                <div class="col-8 d-flex flex-column justify-content-start">
                    <h1 class="bold judul">INSURER</h1>
                    <p class="content-desc desktop">Divisi Insurer adalah divisi keamanan di Mentoring UMN 2022. Seperti namanya, teman-teman divisi Insurer akan memastikan seluruh rangkaian kegiatan Mentoring UMN 2022 berjalan dengan kondusif, aman, dan sesuai dengan peraturan Mentoring dan kampus.</p>
                </div>
            </div>
        </div>
        <div class="content_divisi content-insurer flex-column px-lg-5 py-lg-5 p-2 pb-5 relative collapse" id="insurer">
            <img src="{{ asset('Images/Committee/bg_content/Insurer_BG.png') }}" class="absolute bawah-kiri" alt="">
            <div class="d-flex justify-content-end align-items-center">
                <button class="close-btn d-flex btn btn-md px-lg-4 py-lg-2 px-2 py-1 justify-content-center align-items-center"  data-bs-toggle="collapse" data-bs-target="#insurer" aria-expanded="false" aria-controls="insurer">
                <img class="x-button" src="{{ asset('Images/Committee/vektor_x_button.png') }}" alt="">
                    <p class="m-0 desktop" style="color:white;">Close</p>
                </button>
            </div>
            <div class="mt-lg-5 mt-3 d-flex flex-column align-items-center justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Insurer_Logo.png') }}" alt="">
                <p class="mobile content-desc mt-3 px-5 bold">Divisi Insurer adalah divisi keamanan di Mentoring UMN 2022. Seperti namanya, teman-teman divisi Insurer akan memastikan seluruh rangkaian kegiatan Mentoring UMN 2022 berjalan dengan kondusif, aman, dan sesuai dengan peraturan Mentoring dan kampus.</p>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-insurer p-lg-6 p-3 row">
                    <div class="d-flex flex-column justify-content-between align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/member/Koor_Insurer.png') }}" alt="">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3 class="bold nama_ketua">Sherilyn Annisa</h3>
                            <h5>Koor</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/member/Insurer.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Disty D. Y. S, Angelie. Gabriella V, Glennixon, Trifena C, Angelica P, Vanessa L, Catherine C, Hendro W, Magaretha I, Ahmad R, Vanessa L, Andrev S, Muhammad N, Owen F. G, Izdiharindra P.</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_insurer py-lg-3 py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_insurer" data-bs-toggle="collapse" data-bs-target="#insurer" aria-expanded="false" aria-controls="insurer">
                <p class="bold our-team">Our Teams</p>
                <img class="down-team" src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
            </button>
        </div>
    </div>
</div>
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>
$(document).ready(function(){
    $("#mentor").on("hide.bs.collapse", function(){
        $(".clickdown_mentor").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#mentor").on("show.bs.collapse", function(){
        $(".clickdown_mentor").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#cc").on("hide.bs.collapse", function(){
        $(".clickdown_cc").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#cc").on("show.bs.collapse", function(){
        $(".clickdown_cc").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#admin").on("hide.bs.collapse", function(){
        $(".clickdown_admin").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#admin").on("show.bs.collapse", function(){
        $(".clickdown_admin").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#accom").on("hide.bs.collapse", function(){
        $(".clickdown_accom").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#accom").on("show.bs.collapse", function(){
        $(".clickdown_accom").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#web").on("hide.bs.collapse", function(){
        $(".clickdown_web").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#web").on("show.bs.collapse", function(){
        $(".clickdown_web").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#ec").on("hide.bs.collapse", function(){
        $(".clickdown_ec").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#ec").on("show.bs.collapse", function(){
        $(".clickdown_ec").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#dokum").on("hide.bs.collapse", function(){
        $(".clickdown_dokum").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#dokum").on("show.bs.collapse", function(){
        $(".clickdown_dokum").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#visual").on("hide.bs.collapse", function(){
        $(".clickdown_visual").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#visual").on("show.bs.collapse", function(){
        $(".clickdown_visual").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#prmr").on("hide.bs.collapse", function(){
        $(".clickdown_prmr").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#prmr").on("show.bs.collapse", function(){
        $(".clickdown_prmr").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#research").on("hide.bs.collapse", function(){
        $(".clickdown_research").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#research").on("show.bs.collapse", function(){
        $(".clickdown_research").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
    $("#insurer").on("hide.bs.collapse", function(){
        $(".clickdown_insurer").html('<p class="bold our-team">Our Teams</p><img class="down-team" src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#insurer").on("show.bs.collapse", function(){
        $(".clickdown_insurer").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold our-team">Close</p>');
    });
});
</script>
@endsection