@extends('templates.layout')

@section('Halaman_Judul', 'Data Siswa')

@section('konten')
<div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('lokal.store')}}" method="post">
                    @csrf

                    <div class="col mt-2">
                        <label for="nama" class="text-gray-900">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                    <div class="col mt-2">
                        <label for="nisn" class="text-gray-900">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control">
                    </div>

                    <div class="col mt-2">
                        <label for="jk" class="text-gray-900">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="">Laki-laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>

                    <div class="col mt-2">
                        <label for="lokal_id" class="text-gray-900">Kelas</label>
                        <select name="lokal_id" id="lokal_id" class="form-control">
                            <option value="">--PILIH--</option>
                            @foreach($kelas as $k)
                            <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col mt-2">
                        <label for="alamat" class="text-gray-900">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>

                    <div class="col mt-2">
                        <label for="no_telp" class="text-gray-900">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control">
                    </div>

                    <div class="col mt-2">
                        <label for="foto" class="text-gray-900">Foto</label>
                        <input type="text" name="foto" id="foto" class="form-control" accept="image/*">

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