<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffe extends Model
{
    use HasFactory;
    public function voyageur()
    {
        return $this->belongsTo(voyageur::class, 'id_voy');
    }
    protected $fillable = [
        'name','nomber','id_voy'
    ];
}
