<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Puce;

class Usager extends Model
{
    use HasFactory;

    protected $table ='usagers';

    protected $faillable = [
        'forfait_id',
        'id_offre',
        'nom',
        'prenom',
        'direction',
        'service',
        'ligne',
        'localite',
        'consommation',
    ];
    public function Puce()
    {
        return $this->belongsTo(Puce::class, 'id_puce');
    }
}
