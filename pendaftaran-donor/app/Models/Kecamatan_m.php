<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan_m extends Model
{
    protected $table = 'kecamatan_m';
    protected $fillable = ['kabupaten_id', 'nama'];
}
