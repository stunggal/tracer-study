<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    use HasFactory;

    protected  $fillable = [
        'pertanyaan',
        'jenis',
        'section',
        'nomor',
    ];
}
