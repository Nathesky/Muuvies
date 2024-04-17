@extends('layout')
@section('content')
 

<table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">imagem</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>

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
         <label for="exampleFormControlInput1" class="form-label">Título</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Título do filme">
        </div>
        <div class="mb-3">
         <label for="exampleFormControlTextarea1" class="form-label">Sinopse</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>  
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Escolher imagem </label>
        <input type="file" name="input-imagem" accept="image/*">
        </div>
      </div>




      

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Adicionar</button>
      </div>
    </div>
  </div>
</div>


@endsection