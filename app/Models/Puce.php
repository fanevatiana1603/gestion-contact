<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puce extends Model
{
    use HasFactory;

    protected $table='puces';

    protected $faillable = [
        'numero',
        'numpuk',
        'numserial',
        'operateur',
    ];
}
