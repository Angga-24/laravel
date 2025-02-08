<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\biodata;
use Illuminate\Http\Request;
use App\Models\lokal;

class localcontroller extends Controller
{
    //
    public function index()
    {
        $data_kelas=Lokal::all();
        return view('lokal.index',[
            'menu'=>'lokal',
            'data_kelas'=>$data_kelas
        ]);
    }
    public function create()
    {
        return view('lokal.create',[
            'menu'=>'lokal'
        ]);
    }
    public function store(Request $request){
        $validasi=$request->validate([
            'wali_kelas'=>'required',
            'nama_kelas'=>'required'
        ]);
        $data_baru=New Lokal();
        $data_baru->wali_kelas=$validasi['wali_kelas'];
        $data_baru->nama_kelas=$validasi['nama_kelas'];
        $data_baru->save();

        return redirect(route('lokal.index'));
    }
    public function edit($a_id)
    {
    $data_kelas=Lokal::find($a_id);
    return view('lokal.edit',[
        "menu"=>"lokal",
        "data_kelas"=>$data_kelas
    ]);
}

public function update()
{
$validasi=request()->validate([
    "id"=>"required",
    "nama_kelas"=>"required",
    "wali_kelas"=>"required"
]);
$data_kelas=Lokal::find($validasi['id']);
$data_kelas->nama_kelas=($validasi['nama_kelas']);
$data_kelas->wali_kelas=($validasi['wali_kelas']);
$data_kelas->save();

return redirect(route('lokal.index'));
}
public function destroy($a_id)
{
    $data_kelas=Lokal::find($a_id);
    $data_kelas->delete();
    return redirect(route('lokal.index'));
}
}