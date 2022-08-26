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
                <thead>
                    <tr class="nomor-kelompok">
                        <th class="head-kelompok" colspan="3">KELOMPOK {{ $i }}</th>
                    </tr>
                    <tr class="header-mentoring">
                        <th>No. </th>
                        <th>Nama</th>
                        <th>NIM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $j = 1; ?>
                    @foreach($lists->where('NomorKelompok', $i) as $mentee)
                        <tr>
                            <td style="width:10%">{{ $j++ }}</td>
                            <td>{{ $mentee->Nama }}</td>
                            <td style="width: 25%">{{ $mentee->NIM }}</td>
                        </tr>
                    @endforeach
                </tbody>
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