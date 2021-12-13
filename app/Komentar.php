<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = "komentar" ;
    protected $primaryKey = "id" ;
    protected $fillable = ['user_id', 'id_katalog', 'komentar'] ;
    
    public function katalog(){
        return $this->belongsTo(Katalog::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}