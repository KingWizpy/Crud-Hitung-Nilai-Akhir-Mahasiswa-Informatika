<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = "id";
    protected $fillable = [
        'npm',
        'nama',
        'absen',
        'tugas',
        'uts',
        'uas'
    ];
    use HasFactory;
}
