<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Carbon\Carbon;
use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    //
    public function index()
    {
        $tanggal=Carbon::now();
        return view('latihan',
        [
            "judul"=>"Belajar Laravel 11",
            "tanggal"=>$tanggal->isoFormat('dddd, D MMMM Y'),
            'menu'=>'latihan'
        ]);
    }
    public function biodata()
    {
    $biodata=new biodata();
        return view('biodata',
    [
    "biodata"=>$biodata->biodata(),
    "menu"=>"biodata"
    
    ]);
    }
}