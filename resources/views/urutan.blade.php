@extends('layouts.app')

@section('title', 'Urutan')
<!-- section (key, value) karena section ini bukan diambil dari file tetapi dari key-->

@section('content')

<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
@foreach ($numbers as $number)
    <h1>Urutan Ke - {{ $number['ke'] }}</h1><!-- tambahkan value dari key number karena ke dan nomor merupakan array bukan string -->
    <h3>Nomor Ke - {{ $number['nomor'] }}</h3>
@endforeach

@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
