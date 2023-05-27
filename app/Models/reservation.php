<?php

namespace App\Models;

use App\Models\avion;
use App\Models\voyageur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservation extends Model
{
    use HasFactory;
    public function voyageur()
    {
        return $this->belongsTo(voyageur::class, 'id_voy');
    }

    public function avion()
    {
        return $this->belongsTo(avion::class, 'id_avion');
    }
    protected $fillable = [
        'destination','date','heure','places','id_voy','id_avion'
    ];
}
