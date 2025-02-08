@extends('templates.layout')

@section('title', 'Halaman Index')

@section('konten')
    <h1>Ini adalah halaman Home</h1>
    <h3>Selamat Datang {{$nama}} 
        Anda berada di Kelas {{$kelas}} 
        Alamat Anda di Desa {{$alamat}}</h3>

        <h3>Mantan {{$nama}} adalah :</h3>
        <ol>
            @foreach($mantan as $mt)
            <li>{{$mt}}</li>
            @endforeach
        </ol>
@endsection