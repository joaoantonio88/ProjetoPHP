<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'id',
        'filial_id',
        'nome',
        'datanascimento',
        'sexo',
        'cpf',
        'endereco',
        'cargo',
        'salario',
        'situacao',
        'senha',
    ];

    public $timestamps = false;

    //data formatada m-d-Y
  // protected $appends = ['datanascimento'];
   public function getData2Attribute()
   {
       return date('m-d-Y', strtotime($this->attributes['datanascimento']));
   }


    public function filials(){
        return $this->hasOne(Filial::class);
    }

}
