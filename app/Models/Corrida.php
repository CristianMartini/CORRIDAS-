<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corrida extends Model
{
    use HasFactory;
    protected $fillable= ['nome','dataCorrida','localCorrida'];

    public function Corredor(){
        return $this->hasMany(Corredor::class);
    }
}
