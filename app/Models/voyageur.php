<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voyageur extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','CNE','email','telephone','pays','ville','date_naissance' 
        ];
} 
