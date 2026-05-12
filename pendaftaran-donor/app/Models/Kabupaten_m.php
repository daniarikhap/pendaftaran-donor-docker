<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten_m extends Model
{
    protected $table = 'kabupaten_m';
    protected $fillable = ['provinsi_id', 'nama'];
}
