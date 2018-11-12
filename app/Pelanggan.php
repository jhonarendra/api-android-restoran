<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_pelanggan', 'email_pelanggan', 'username_pelanggan', 'password_pelanggan',
    ];
    protected $table = 'tb_pelanggan';
    
}
