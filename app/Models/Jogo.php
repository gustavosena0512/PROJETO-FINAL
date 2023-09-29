<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Validator;

class Jogo extends Model
{
    use HasFactory;
}

//     public function cadastrar(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'titulo' => 'required|string|max:255',
//         'imagem' => 'required|string|max:255',
//         'data_lancamento' => 'required|date',
//         'trailer_youtube' => 'required|string|max:255',
//         'link_jogo' => 'required|string|max:255',
                
//     ]);

//     if ($validator->fails()) {
//         return redirect()->back()
//             ->withErrors($validator)
//             ->withInput();
//     }

    
//     return redirect()->route('pagina_inicial');
// }
// }


