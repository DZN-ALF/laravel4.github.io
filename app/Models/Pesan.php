<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesanya';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama', 'tujuan', 'kelas', 'pemberangkatan', 'pemulangan'
    ];
}

