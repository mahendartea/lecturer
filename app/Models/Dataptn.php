<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dataptn extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_universitas',
        'statuspt',
        'email',
        'weblink',
        'alamat',
        'kontak',
        'description',
    ];
}
