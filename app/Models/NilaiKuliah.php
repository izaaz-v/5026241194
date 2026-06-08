<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiKuliah extends Model
{
    protected $table = 'nilaikuliah';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = ['NRP', 'NilaiAngka', 'SKS'];
}
