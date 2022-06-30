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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/Mentor/content_logo_mentor.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-mentor p-lg-4 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-3">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="row col-4 col-lg-3 ps-lg-0 ps-3 list_anggota">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Nama Kelompok</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                    </div> 
                    <div class="col-lg-1 desktop"></div>
                    <div class="col-5 d-flex justify-content-start">
                        <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                    </div>     
                </div>  
                <div class="box-kelompok shadow-mentor p-lg-4 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-3">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="row col-4 col-lg-3 ps-lg-0 ps-3 list_anggota">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Nama Kelompok</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                    </div> 
                    <div class="col-lg-1 desktop"></div>
                    <div class="col-5 d-flex justify-content-start">
                        <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                    </div>     
                </div>    
                <div class="box-kelompok shadow-mentor p-lg-4 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-3">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="row col-4 col-lg-3 ps-lg-0 ps-3 list_anggota">
                        <h2 class="col-12 p-0 m-0 nama_ketua bold">Nama Kelompok</h2>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                        <p class="col-12 p-0 m-0 col-lg-6 medium">Nama Anggota</p>
                    </div> 
                    <div class="col-lg-1 desktop"></div>
                    <div class="col-5 d-flex justify-content-start">
                        <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                    </div>     
                </div>  
            </div>
        </div>
        <div class="close close_mentor py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_mentor" data-bs-toggle="collapse" data-bs-target="#mentor" aria-expanded="false" aria-controls="mentor">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/CC_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-cc p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_cc py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_cc" data-bs-toggle="collapse" data-bs-target="#cc" aria-expanded="false" aria-controls="cc">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_divisi/Logo_Admin.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-admin p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_admin py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_admin" data-bs-toggle="collapse" data-bs-target="#admin" aria-expanded="false" aria-controls="admin">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_divisi/Logo_Akomodasi.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-accom p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_accom py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_accom" data-bs-toggle="collapse" data-bs-target="#accom" aria-expanded="false" aria-controls="accom">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Web_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-web p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_web py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_web" data-bs-toggle="collapse" data-bs-target="#web" aria-expanded="false" aria-controls="web">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/EC_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-ec p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_ec py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_ec" data-bs-toggle="collapse" data-bs-target="#ec" aria-expanded="false" aria-controls="ec">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Dokum_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-dokum p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_dokum py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_dokum" data-bs-toggle="collapse" data-bs-target="#dokum" aria-expanded="false" aria-controls="dokum">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Visual_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-visual p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_visual py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_visual" data-bs-toggle="collapse" data-bs-target="#visual" aria-expanded="false" aria-controls="visual">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/PRMR_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-prmr p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_prmr py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_prmr" data-bs-toggle="collapse" data-bs-target="#prmr" aria-expanded="false" aria-controls="prmr">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Research_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-research p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_research py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_research" data-bs-toggle="collapse" data-bs-target="#research" aria-expanded="false" aria-controls="research">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
                    <p class="content-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum odit explicabo, totam optio, ipsam veniam quaerat quia corporis repellendus laborum nam dolor fugiat, inventore impedit dolorum architecto et suscipit! Tenetur?</p>
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
            <div class="mt-lg-5 mt-3 d-flex justify-content-center">
                <img class="logo" src="{{ asset('Images/Committee/logo_content/Insurer_Logo.png') }}" alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="box-kelompok shadow-insurer p-lg-6 p-2 row">
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-6 col-6">
                        <img class="image-ketua" src="{{ asset('Images/Committee/ketua.png') }}" alt="">
                        <h3 class="bold nama_ketua">Nama Ketua</h3>
                    </div>
                    <div class="col-lg-6 col-6 d-flex flex-column align-items-center">
                        <div class="d-flex justify-content-start">
                            <img class="image-anggota" src="{{ asset('Images/Committee/anggota.png') }}" alt="">    
                        </div>
                        <div class="d-flex list_anggota">
                            <p class="text-center">Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota, Nama Anggota</p>
                        </div>     
                    </div>
                </div>  
            </div>
        </div>
        <div class="close close_insurer py-1 mb-5 d-flex justify-content-center align-items-center">
            <button class="d-flex flex-column align-items-center justify-content-center clickdown clickdown_insurer" data-bs-toggle="collapse" data-bs-target="#insurer" aria-expanded="false" aria-controls="insurer">
                <p class="bold">Our Teams</p>
                <img src="{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">
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
        $(".clickdown_mentor").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#mentor").on("show.bs.collapse", function(){
        $(".clickdown_mentor").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#cc").on("hide.bs.collapse", function(){
        $(".clickdown_cc").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#cc").on("show.bs.collapse", function(){
        $(".clickdown_cc").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#admin").on("hide.bs.collapse", function(){
        $(".clickdown_admin").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#admin").on("show.bs.collapse", function(){
        $(".clickdown_admin").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#accom").on("hide.bs.collapse", function(){
        $(".clickdown_accom").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#accom").on("show.bs.collapse", function(){
        $(".clickdown_accom").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#web").on("hide.bs.collapse", function(){
        $(".clickdown_web").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#web").on("show.bs.collapse", function(){
        $(".clickdown_web").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#ec").on("hide.bs.collapse", function(){
        $(".clickdown_ec").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#ec").on("show.bs.collapse", function(){
        $(".clickdown_ec").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#dokum").on("hide.bs.collapse", function(){
        $(".clickdown_dokum").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#dokum").on("show.bs.collapse", function(){
        $(".clickdown_dokum").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#visual").on("hide.bs.collapse", function(){
        $(".clickdown_visual").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#visual").on("show.bs.collapse", function(){
        $(".clickdown_visual").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#prmr").on("hide.bs.collapse", function(){
        $(".clickdown_prmr").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#prmr").on("show.bs.collapse", function(){
        $(".clickdown_prmr").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#research").on("hide.bs.collapse", function(){
        $(".clickdown_research").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#research").on("show.bs.collapse", function(){
        $(".clickdown_research").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
    $("#insurer").on("hide.bs.collapse", function(){
        $(".clickdown_insurer").html('<p class="bold">Our Teams</p><img src=' + '"{{ asset('Images/Committee/Vector_arrow_down.png') }}" alt="">');
    });
    $("#insurer").on("show.bs.collapse", function(){
        $(".clickdown_insurer").html('<img src=' + '"{{ asset('Images/Committee/Vector_arrow_up.png') }}" alt=""><p class="bold">Close</p>');
    });
});
</script>
@endsection