<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campio extends Model
{
    use HasFactory;

    protected $fillable = [
        'idlol','nom','desc_curta','desc_llarga','foto_petita','foto_gran'
    ];
}
