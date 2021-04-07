<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // pasako, kuri stulpeli naudoti kaip primarKey
    protected $primaryKey = 'isbn';
    // fillable pasako, kad galesiu sukurti objekta paduodamas per masyva reiskmes
    protected $fillable = ['isbn', 'title'];
}
