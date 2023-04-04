<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //field yang dapat diisi
    protected $fillable =
    [
        'judul',
        'subjudul',
        'slug',
        'tanggal',
        'kategori',
        'isiartikel',
        'user',
        'gambar',
        'tag1',
        'tag2',
        'tag3',
    ];
}
