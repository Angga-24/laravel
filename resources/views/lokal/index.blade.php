@extends('templates.layout')

@section('title', 'Data Kelas')

@section('konten')
<br>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-danger">Manajemen Data</h5>
            </div>
            <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kelas</th>
                        <th>nama kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                
                @foreach ($data_kelas as $dk)
                <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$dk->nama_kelas}}</td>
                        <td>{{$dk->wali_kelas}}</td>
                        <td>
                        </a>
                                    <a href="{{route('lokal.edit',$dk->id)}}" class="btn btn-success btn-circle" title="edit data">
                                        <i class="fas fa-edit"></i>
                                    </a>
                            <form action="{{route('lokal.hapus',$dk->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-danger btn-circle btn-li" title="Hapus Data Kelas">
                                        <i class="fas fa-trash"></i>
                                        </button>
                                    
                                        </td>
                    </tr>
                    
                                    
                </tbody>
                @endforeach
            </table>
            <a href="{{route('lokal.create')}}" class="btn btn-danger mb-3 float-right">Tambah Data</a>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection