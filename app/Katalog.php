<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $table = 'katalog';
    protected $primarykey = 'id';
    protected $dates = ['tgl_terbit'];
    protected $fillable = ['nama_produk','nama_brand','harga','keterangan','tgl_terbit'. 'foto','katalog_seo'];

     //fungsi foto
    public function photos(){
        return $this->hasMany('App\Galeri', 'id_katalog', 'id');
    }
}