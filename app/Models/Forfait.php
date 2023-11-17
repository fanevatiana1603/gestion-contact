<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    protected $table='tarif_forfaits';

    protected $faillable = [
        'id_tarif',
        'id_forfait',
        'prix',
    ];
}
