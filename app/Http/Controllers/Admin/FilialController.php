<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Funcionario;
use sistemaLaravel\Http\Requests\FuncionarioFormRequest;
use DB;
use App\Filial;

class FilialController extends Controller
{
    public function index()
    {
      $registros = Filial::all();
      return view('admin.filiais.index',compact('registros'));
    }

    public function adicionar()
    {
      return view('admin.filiais.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();

      Filial::create($dados);

      return redirect()->route('admin.filiais');
    }

    public function editar($id)
    {
      $registro = Filial::find($id);
      return view('admin.filiais.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Filial::find($id)->update($dados);

      return redirect()->route('admin.filiais');
    }

    public function buscaFilial($id)
    {
      $registro = Filial::find($id);
      return view('admin.filiais.buscaFilial', compact('registro'));
    }

    public function deletar($id)
    {
      Filial::find($id)->delete();
      return redirect()->route('admin.filiais');
    }

}
