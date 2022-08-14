<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan_ke', 'pertanyaan', 'jenis_jawaban', 'nim_mhs'
    ];
}
