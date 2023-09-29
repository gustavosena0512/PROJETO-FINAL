<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class Games extends Controller
{
    public function pagina_incial()
    {   
        $jogos=Jogo::all();

        return view('welcome',['jogos'=>$jogos]);
    }

    public function cadastrar(){
          
        return view('cadastrar');
    }
    public function adicionar (Request $request){
        $jogo= new Jogo;
        $jogo->titulo= $request->titulo;
        // upload imagem
            $requestImagem = $request->imagem;
            $imagemNome = $requestImagem->getClientOriginalName();
            $requestImagem->move(storage_path('app/public/imagem/jogos'), $imagemNome);
            $jogo->imagem = $imagemNome;
        $jogo->descricao = $request->descricao;
        $jogo->link_jogo = $request->link_jogo;
        $jogo->tags = $request->tags;
        $jogo->trailer_youtube = $request->trailer_youtube;
        $jogo->save();
        return redirect('/');
        
    }

    public function excluir(Request $request){
        Jogo::find($request->id)->delete();
        return redirect('/');
    }












}






