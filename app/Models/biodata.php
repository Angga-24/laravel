<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    public function biodata()
    {
        $data=array(
            array("nama"=>"hafiz","kelas"=>"Ⅺ RPL 1"),
            array("nama"=>"hafiz","kelas"=>"XI RPL 2"),
            array("nama"=>"hafiz","kelas"=>"X RPL 1"),
        );
        return $data;
    } 
}
