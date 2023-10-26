@extends('sproduit.contenue')
@section('content')

    <div style="margin-top:7%; width:50% ;margin-left:20%" >
        <h2> Ajouter Categorie </h2>
        <form method="POST" action="{{route('categorie.store')}}">
            @csrf
            <div class="mb-3">
              <label  class="form-label">Nom du categorie :</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{route('categorie.index')}}" class="btn btn-secondary">Retour</a>
          </form>
    </div>
@endsection