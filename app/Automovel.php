<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovel extends Model
{
    protected $fillable = [
        'id',
        'filial_id',
        'nome',
        'ano',
        'modelo',
        'cor',
        'numerochassis',
        'categoria'
    ];

    public $timestamps = false;

    public function automoveis(){
        return $this->hasOne(Automovel::class);
    }

}
