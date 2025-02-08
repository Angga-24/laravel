<?php

namespace App\Http\Controllers;

use App\Models\Lokal;
use App\Models\Siswa;
use Illuminate\View\View;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    //
    public function index():View
    {
        $data_siswa=Siswa::all();
        return view('siswa.index', [
            "menu"=> "siswa",
            "title"=>" Data Siswa",
            "datasiswa"=>$data_siswa
        ]);
    }

    public function create():View
    {
        $kelas=Lokal::all();
        return view('siswa.index', [
            "menu"=> "siswa",
            "title"=>"Tambah Data Siswa",
            "kelas"=>$kelas
        ]);
    }

    public function store(Request $request):RedirectResponse
    {
        $validasi=$request->$validate([
            "nama"=>"required",
            "nisn"=>"required",
            "jk"=>"required",
            "alamat"=>"required",
            "lokal_id"=>"required",
            "foto"=>"image|mimes:jpeg,jpg,pnggif,svg|max:2048"
        ],[
            'nama.required'=>'Nama Harus Diisi',
            'nisn.required'=>'NISN Harus Diisi',
            'jk.required'=>'Jenis Kelamin Harus Diisi',
            'alamat.required'=>'Alamat Harus Diisi',
            'local_id.required'=>'Kelas Harus Diisi',
            'foto.image'=>'File Harus Berupa Gambar',
            'foto.mimes'=>'Format File Harus jpg,png,jpeg,gif,svg',
            'foto.max'=>'Ukuran File Maksimal 2MB'
        ]);
        $simpan_foto=$request->file('foto')->store('foto_siswa');

        $siswa=new Siswa;
        $siswa->nama=$validasi['nama'];
        $siswa->nisn=$validasi['nisn'];
        $siswa->jk=$validasi['jk'];
        $siswa->alamat=$validasi['alamat'];
        $siswa->lokal_id=$validasi['lokal_id'];
        $siswa->no_telp=$request->no_telp;
        $siswa->foto=$simpan_foto;
        $siswa->save();
    }
}
