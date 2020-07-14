<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Automovel;
use DB;

class AutomovelController extends Controller
{
    public function index()
    {
      $registros = Automovel::all();
      return view('admin.automoveis.index',compact('registros'));
    }

    public function adicionar()
    {
      $filiais=DB::table('filials')->get();

    	return view("admin.automoveis.adicionar", ["filiais"=>
    	$filiais]);
    }

    public function editar($id)
    {
      $automoveis = Automovel::findOrFail($id);
      $filiais=DB::table('filials')->get();

      $registro = Automovel::find($id);
      return view('admin.automoveis.editar',compact('registro'), ['filiais'=>$filiais]);
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();

      Automovel::create($dados);

      return redirect()->route('admin.automoveis');
    }


    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      Automovel::find($id)->update($dados);

      return redirect()->route('admin.automoveis');
    }

    public function deletar($id)
    {
      Automovel::find($id)->delete();
      return redirect()->route('admin.automoveis');
    }

}
