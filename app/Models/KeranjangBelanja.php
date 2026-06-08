<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    protected $table = 'keranjangbelanja';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = ['KodeBarang', 'Jumlah', 'Harga'];
}
