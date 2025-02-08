@extends
('templates.layour')

@section('konten')

<div class="row mt-5">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h5 class="m-0 font-weight-bold text-primary">Input Data Kelas</h5>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td>nama</td>
                        <td>:</td>
                        <td>{{$siswa->nama}}</td>
                    </tr>
                    <tr>
                        <td>nisn</td>
                        <td>:</td>
                        <td>{{$siswa->nisn}}</td>
                    </tr>
                    <tr>
                        <td>jenis kelamin</td>
                        <td>:</td>
                        <td>{{$siswa->jk}}</td>
                    </tr>
                    <tr>
                        <td>kelas</td>
                        <td>:</td>
                        <td>{{$siswa->kelas}}</td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td>{{$siswa->alamat}}</td>
                    </tr>
                    <tr>
                        <td>no telepon</td>
                        <td>:</td>
                        <td>{{$siswa->no_telp}}</td>
                    </tr>
                    <tr>
                        <td>foto</td>
                        <td>:</td>
                        <td><img src="{{asset('storage/'.$siswa->foto}}" alt="foto" width="100"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection