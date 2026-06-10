<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topi extends Model
{
    protected $table = 'topi';
    protected $primaryKey = 'kodetopi';
    public $timestamps = false; // Assuming the prompt didn't ask for created_at/updated_at
    protected $fillable = ['merktopi', 'stocktopi', 'tersedia'];
}
