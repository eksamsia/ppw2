<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    public function katalog(){
        return $this->belongsTo('App\Katalog', 'id_katalog', 'id');
    }
}