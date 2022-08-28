@extends('template.app')

<!-- link css external -->
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/list.css') }}">
@endsection

<!-- Coding HTML sini gais -->
@section('content')
    <div class="head-box">
        <img src={{ asset('Images/ListKelompok/Maskot.png') }} class="maskot-list">
        <h1 class="list-title">List Kelompok Mentoring 2022</h1>
    </div>
    <div class="list-box">
        @for($i = 1; $i<=DB::table('kelompoks')->orderBy('NomorKelompok', 'desc')->first()->NomorKelompok; $i++)
            <table class=" table table-mentoring">
                <?php $j = 1; ?>
                @foreach($lists->where('NomorKelompok', $i) as $mentee)
                    @if($mentee->status == 'mentor')
                        <thead>
                            <tr class="nomor-kelompok">
                                <th class="head-kelompok" colspan="4">KELOMPOK {{ $i }}</th>
                            </tr>
                            <tr class="list-mentor">
                                <th colspan="4" class="head-mentor">{{ $mentee->Nama }}</th>
                            </tr>
                            <tr class="header-mentoring">
                                <th>No. </th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Prodi</th>
                            </tr>
                        </thead>
                        <tbody>
                    @else
                        <tr>
                            <td style="width:5%;text-align:center;">{{ $j++ }}</td>
                            <td style="width: 50%">{{ $mentee->Nama }}</td>
                            <td style="width: 20%;">{{ $mentee->NIM }}</td>
                            <td >{{ $mentee->Prodi }}</td>
                        </tr>
                    @endif
                </tbody>
                @endforeach
            </table>
        @endfor
    </div>
    <img src={{ asset('Images/ListKelompok/Trail_Announce.png') }} class="trail-list">
@endsection

<!-- Script javascriptnya disini gais -->
@section('custom-js')
<script>

</script>
@endsection