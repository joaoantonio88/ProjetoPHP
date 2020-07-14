<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'endereco',
        'ie',
        'cnpj',
    ];

    public $timestamps = false;

    public function Filiais(){
        return $filial = Filial::lists('nome', 'id')->all();
    }


}
