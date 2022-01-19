<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventes extends Model
{
    use HasFactory;
    protected $table = "repas_crees";
    protected $fillable = ['repas__crees_id'];
}
