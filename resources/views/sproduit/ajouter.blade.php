@extends('sproduit.contenue')
@section('content')

    <div style="margin-top:7%; width:50% ;margin-left:20%" >
        <h2> Ajouter un nouveau produit </h2>
        <form method="POST" action="{{route('sproduit.store')}}">
            @csrf
            <div class="mb-3">
              <label  class="form-label">Reference :</label>
              <input type="text" class="form-control" name="ref">
            </div>
            <div class="mb-3">
                <label  class="form-label">Designation :</label>
                <input type="text" class="form-control" name="designation" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Prix:</label>
                <input type="text" class="form-control" name="prix">
            </div>
            <div class="mb-3">
                <label  class="form-label">Quantite:</label>
                <input type="text" class="form-control" name="quantite">
            </div>
                
            <select class="form-select" name="categorie_id">
                <option selected>choisir une categorie</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
                    @endforeach
              </select>
            <button type="submit" class="btn btn-primary">Ajouet</button>
            <a href="{{route('sproduit.index')}}" class="btn btn-secondary">Retour</a>
          </form>
    </div>
@endsection