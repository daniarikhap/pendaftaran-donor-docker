<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan_m extends Model
{
    protected $table = 'kelurahan_m';
    protected $fillable = ['kecamatan_id', 'nama'];//
}
