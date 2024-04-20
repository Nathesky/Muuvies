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
        // Validação dos dados do formulário
        $dadosValidos = $request->validate([
            'titulo' => 'required|string',
            'sinopse' => 'required|string',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Salvar a imagem no diretório storage/images com um nome único gerado pelo Laravel
        $imagemCaminho = $request->file('imagem')->store('images', 'public');
    
        // Obter a URL da imagem usando o helper Storage::url()
        $urlImagem = Storage::url($imagemCaminho);
    
        $filme = new Movies([
            'titulo' => $dadosValidos['titulo'],
            'sinopse' => $dadosValidos['sinopse'],
            'imagem' => $urlImagem, // Salve a URL da imagem no banco de dados
        ]);
    
        $filme->save();
    
        // Redireciona de volta para a página anterior
        return redirect()->back()->with('success', 'Filme cadastrado com sucesso!');
    }

     public function index()
    {
        // Busca todos os filmes do banco de dados
        $filmes = Movies::all();

        // Passa os filmes para a view e retorna a view
        return view('home', ['filmes' => $filmes]);
    }

        // MOSTRAR TODOS OS FILMES
        public function gerenciarFilmes(Request $request)
        {
            $filmes = Movies::query();
        
            $filmes->when($request->titulo, function ($query, $valor) {
                $query->where('titulo', 'like', '%' . $valor . '%');
            });
        
            $filmes = $filmes->get();
        
            return view('adm', ['filmes' => $filmes]);
        }
        
        // ALTERAR
        public function alterarFilme(Movies $id, Request $request)
    {
        // Validação dos dados do formulário
        $dadosValidos = $request->validate([
            'titulo' => 'required|string',
            'sinopse' => 'required|string',
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // A imagem é opcional
        ]);

        // Preencher o modelo com os dados validados
        $id->fill($dadosValidos);

// Verifique se a imagem foi enviada corretamente
if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
    // Salvar a nova imagem
    $imagemCaminho = $request->file('imagem')->store('images', 'public');
    // Atualizar o caminho da imagem no modelo
    $id->imagem = $imagemCaminho;
} else {
    return redirect()->back()->with('error', 'Erro ao enviar a imagem.');
}

        // Salvar as alterações no banco de dados
        $id->save();

        // Redirecionar de volta para a página anterior
        return Redirect::route('gerenciamento');
    }

    // alterar id
    public function alterarFilmeId(Movies $id){
        return view('alterarFilme', ['filme' => $id]);
    }

    public function destroy(Movies $id)
{
    $id->delete();
    return Redirect::route('gerenciamento');
}
        
}
