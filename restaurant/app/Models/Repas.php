<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas extends Model
{
    use HasFactory;
    protected $table = "repas";
    protected $fillable = ['nom'];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, 'repas__ingredients');
    }
}
