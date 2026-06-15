<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topi extends Model
{
    protected $table = 'topi';
    protected $primaryKey = 'kodetopi';
    public $timestamps = false;
    protected $fillable = ['merktopi', 'stocktopi', 'tersedia'];
}
