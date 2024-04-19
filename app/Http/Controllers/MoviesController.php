<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Http\Requests\StoreMoviesRequest;
use App\Http\Requests\UpdateMoviesRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MoviesController extends Controller
{
    
    
public function cadFilme(Request $request)
{
    $dadosValidos = $request->validate([
        'titulo' => 'required|string',
        'sinopse' => 'required|string',
        'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,avif|max:2048', // Defina as regras de validação da imagem
    ]);

    // Verifica se o arquivo de imagem foi enviado
    if ($request->hasFile('imagem')) {
        // Obtém o nome original do arquivo
        $nomeArquivo = $request->file('imagem')->getClientOriginalName();
        // Salva o arquivo na pasta public/images
        $caminho = $request->file('imagem')->storeAs('images', $nomeArquivo);
        // Adiciona o caminho da imagem aos dados válidos
        $dadosValidos['imagem'] = $caminho;
    }

    // Cria um novo filme no banco de dados
    Movies::create($dadosValidos);

    return redirect()->back()->with('success', 'Filme cadastrado com sucesso!');
}
}
