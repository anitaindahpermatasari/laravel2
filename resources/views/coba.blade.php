<!-- Cara memanggil app.blade.php -->

@extends('layouts.app')
<!-- extends (nama file. nama folder) -->

@section('title', 'Coba')
<!-- section (key, value) karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
<!-- section untuk memanggil isi dari yield -->

    Coba Ke - {{ $ke }}
    <!-- isi body di letaka di dalam section -->

@endsection
