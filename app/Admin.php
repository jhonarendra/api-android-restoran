<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_pegawai','email_pegawai','username_pegawai','password_pelanggan',
    ];
    protected $table = 'tb_pegawai';
}
