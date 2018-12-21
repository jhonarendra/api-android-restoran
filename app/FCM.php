<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FCM extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token'
    ];
    protected $table = 'tb_token';
}
