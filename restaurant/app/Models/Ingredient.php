<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $table = "ingredients";
    protected $fillable = ['nom', 'quantite', 'unite'];

    public function repas()
    {
        return $this->belongsToMany(Repas::class, 'repas__ingredients');
    }
}
