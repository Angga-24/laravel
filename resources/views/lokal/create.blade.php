@extends('templates.layout')

@section('Halaman_Judul', 'Data Kelas')

@section('konten')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('lokal.store')}}" method="post">
                    @csrf
                    <div class="col mt-2">
                        <label for="nama_kelas" class="text-gray-900">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
                    </div>
                    <div class="col mt-2">
                        <label for="wali_kelas" class="text-gray-900">Wali Kelas</label>
                        <input type="text" name="wali_kelas" id="wali_kelas" class="form-control">
                    </div>
                    <div class="col mt-2">
                        <button type="submit" class="btn btn-md btn-primary float-right">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
    </div>
    @endsection