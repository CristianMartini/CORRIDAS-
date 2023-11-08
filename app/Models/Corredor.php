<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    use HasFactory;
    protected $fillable = ['nome','sobrenome','numero','corrida_id'];

    public function Corrida(){
        return $this->belongsTo(Corrida::class);

    }}

