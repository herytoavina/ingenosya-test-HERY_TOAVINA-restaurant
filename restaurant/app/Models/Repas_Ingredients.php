<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas_Ingredients extends Model
{
    use HasFactory;
    protected $table = "repas__ingredients";
    protected $fillable = ['repas_id', 'ingredients_id', 'quantite'];
}
