@extends('template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/announcement.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/modal.css') }}">
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

        @foreach($dates as $date)
        <div class="box-bottom relative">
            <p class="date">{{ $date }}</p>
            @foreach($announcements->where('date', $date) as $announcement)
            <div class="child-box relative overflow-hidden">
                <h1 class="ann-title">{{ $announcement->title }}</h1>
                <p class="ann-content">{{ $announcement->subtitle }}</p>
                <button id="moreData{{ $announcement->id }}"class="btn btn-open">Open</button>
                <img class="speaker" src="{{ asset('Images/Announcement/Speaker.png') }}">
                <img class="vector-left" src="{{ asset('Images/Announcement/Vector_left.png') }}">
                <img class="vector-right" src="{{ asset('Images/Announcement/Vector_right.png') }}">
                <img class="trail-left" src="{{ asset('Images/Announcement/Trail_left.png') }}">
                <img class="trail-right" src="{{ asset('Images/Announcement/Trail_right.png') }}">
            </div>
            @endforeach
        </div>
        @endforeach

        {{-- Modal --}}
        @foreach ($announcements as $announcement)
        <div id="moreDataModal{{ $announcement->id }}" class="data-modal">
            <div class="data-modal-content">
                <div class="data-modal-header">
                    <span class="data-close{{ $announcement->id }} data-close">&times;</span>
                    <h2>
                        {{ $announcement->title }}
                    </h2>
                </div>
                <p class="text-start date-modal mb-2">{{ $announcement->date }}</p>
                <p class="text-content">{{ $announcement->content }}</p>
            </div>
        </div>
        @endforeach

        <img class="bg-foot" src="{{ asset('Images/Announcement/BG_Announcement2.png') }}">
    </div>
    {{-- END OF SECTION 1 --}}
</div>
@endsection

@section('custom-js')
<script>
    @foreach ($announcements as $announcement)
        // Get the modal
        var modal{{ $announcement->id }} = document.getElementById("moreDataModal{{ $announcement->id }}");

        // Get the button that opens the modal
        var btn{{ $announcement->id }} = document.getElementById("moreData{{ $announcement->id }}");

        // Get the <span> element that closes the modal
        var span{{ $announcement->id }} = document.getElementsByClassName("data-close{{ $announcement->id }}")[0];

        // When the user clicks on the button, open the modal
        btn{{ $announcement->id }}.onclick = function() {
            modal{{ $announcement->id }}.style.display = "block";
            $("body").addClass("modal-open");
        }

        // When the user clicks on <span> (x), close the modal
        span{{ $announcement->id }}.onclick = function() {
            modal{{ $announcement->id }}.style.display = "none";
            $("body").removeClass("modal-open")
        }

        //When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal{{ $announcement->id }}) {
                modal{{ $announcement->id }}.style.display = "none";
                $("body").removeClass("modal-open")
            }
        }
    @endforeach
</script>
@endsection