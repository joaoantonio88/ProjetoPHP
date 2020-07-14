<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;
use App\User;
use App\Http\Requests\FuncionarioFormRequest;
use DB;


class FuncionarioController extends Controller
{
  public function index()
  {
    $registros = Funcionario::all();
    return view('admin.funcionarios.index',compact('registros'));
  }

  public function adicionar()
  {
    $filiais=DB::table('filials')->get();

    return view("admin.funcionarios.adicionar", ["filiais"=>
    $filiais]);
  }

  public function editar($id)
  {
    $funcionarios = Funcionario::findOrFail($id);
    $filiais=DB::table('filials')->get();

    $registro = Funcionario::find($id);
    return view('admin.funcionarios.editar',compact('registro'), ['filiais'=>$filiais]);
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();

    if(isset($dados['situacao'])){
      $dados['situacao'] = 'ativo';
    }else{
      $dados['situacao'] = 'inativo';
    }

    Funcionario::create($dados);



    return redirect()->route('admin.funcionarios');
  }


  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();

    if(isset($dados['situacao'])){
      $dados['situacao'] = 'ativo';
    }else{
      $dados['situacao'] = 'inativo';
    }

    Funcionario::find($id)->update($dados);

    return redirect()->route('admin.funcionarios');
  }

  public function deletar($id)
  {
    Funcionario::find($id)->delete();
    return redirect()->route('admin.funcionarios');
  }


}
