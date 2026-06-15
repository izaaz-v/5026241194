<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tagihan_air extends Model
{
    protected $table = 'tagihan_air';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = ['NoMeteren', 'MeterAwal', 'MeterAkhir'];
}
