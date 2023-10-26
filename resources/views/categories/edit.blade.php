@extends('sproduit.contenue')
@section('content')

    <div style="margin-top:7%; width:50% ;margin-left:20%" >
        <h2> modifier Categorie </h2>
        <form method="POST" action="{{route('categorie.update',$category->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label  class="form-label">Nom du categorie :</label>
              <input type="text" class="form-control" name="nom" value="{{ $category->nom }}" required>
            </div>
            <button type="submit" class="btn btn-warning">Modifier</button>
            <a href="{{route('categorie.index')}}" class="btn btn-secondary">Retour</a>
          </form>
    </div>
@endsection