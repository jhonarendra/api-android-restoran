<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tb_komentar';

    protected $fillable = [
        'id_pelanggan', 'isi_komentar'
    ];
    
}
