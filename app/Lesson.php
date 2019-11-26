<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function users(){
        return $this->belongsToMany('App\User')->withTimeStamps(); //->withPivot('nama_kolom');
    }
}
