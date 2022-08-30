<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_jawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pertanyaan', 'pilihan_jawaban'
    ];
}
