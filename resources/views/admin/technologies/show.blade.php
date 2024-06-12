@extends('layouts.admin')
@section('content')

<div class="container">

  @if(session()->has('message'))
    <div class="alert alert-success">
    {{ session()->get('message') }}
    </div>
  @endif

  <h1 class=" text-uppercase py-3 ">{{ $technology->name }}</h1>

  <img class="w-25" src="{{asset('storage/' . $technology->image ?? '') }}" alt="">

  <div class=" fs-3 py-4">Status: {{ $technology->content }}</div>

  <div class="d-flex justify-content-start py-2">
    <button class="btn btn-primary h-25"><a class="text-decoration-none text-white"
        href="{{route('admin.technologies.edit', $technology->slug)}}">Modifica</a></button>

    <form action="{{ route('admin.technologies.destroy', $technology->slug) }}" method="POST">
      @csrf
      @method('DELETE')
      <input id="deletetechnologies" type="submit" value="Elimina" class="btn btn-danger ms-3">
    </form>

  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Stai eliminando {{ $technology->title }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sicuro/a di voler eliminare questo elemento?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Elimina</button>
      </div>
    </div>
  </div>
</div>


@endsection