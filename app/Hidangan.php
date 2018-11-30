<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hidangan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nama_hidangan','deskripsi_hidangan','harga_hidangan','kategori_hidangan','foto_hidangan',
    ];
    protected $table = 'tb_hidangan';
    
}
