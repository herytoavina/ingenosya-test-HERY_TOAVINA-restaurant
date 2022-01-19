<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas_Crees extends Model
{
    use HasFactory;
    protected $table = "repas__crees";
    protected $fillable = ['repas_id'];
}
