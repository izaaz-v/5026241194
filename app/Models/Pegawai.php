<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $primaryKey = 'pegawai_nama';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'pegawai_nama',
        'pegawai_jabatan',
        'pegawai_umur',
        'pegawai_alamat',
    ];

    public function getRouteKeyName()
    {
        return 'pegawai_nama';
    }
}
