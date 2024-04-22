  @extends('layout')
  @section('content')

  <div class="container mt-5" style="display: flex; flex: 1; min-height: 100vh">
      <table class="table mt-4">
          <thead>
              <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Título</th>
                  <th scope="col">Imagem</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Excluir</th>
              </tr>
          </thead>
          <tbody>
              @foreach($filmes as $filme)
              <tr>
                  <td>{{ $filme->id }}</td>
                  <td>{{ $filme->titulo }}</td>
                  <td>
                  <img src="{{ asset($filme->imagem) }}?{{ time() }}" alt="{{ $filme->titulo }}" style="max-width: 100px;">
                  </td>
                  <td>
                  <a href="{{ route('mostrar-filme', $filme->id) }}" class="btn btn-primary">Editar</a>
                  </td>
                  <td>
                  <form method="post" action="{{ route('apagar-filme', $filme->id) }}">
                            @method('delete')
                            @csrf  
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" id="adc-f"data-bs-toggle="modal" data-bs-target="#exampleModal">
      Adicionar Filme
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Filme</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <form class="row g-3" method="POST" action="{{ route('envia-banco-filme') }}" enctype="multipart/form-data">
                          @csrf
                          <label for="exampleFormControlInput1" class="form-label">Título</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título do filme" name="titulo">
                          
                          <label for="exampleFormControlTextarea1" class="form-label">Sinopse</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopse"></textarea>

                          <label for="inputImagem" class="form-label">Escolher imagem</label>
                          <input type="file" class="form-control" id="inputImagem" name="imagem">
                          
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-primary">Adicionar</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  @endsection
