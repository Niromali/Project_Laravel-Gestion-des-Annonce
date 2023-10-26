@extends('sproduit.contenue')
@section('content')

    <div style="margin-top:7%; width:50% ;margin-left:20%" >
        <h2> Modifier le produit </h2>
        <form method="POST" action="{{route('sproduit.update',$products->id)}}" >
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label  class="form-label">Reference :</label>
              <input type="text" class="form-control" name="reference" value="{{$products->ref}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Designation :</label>
                <input type="text" class="form-control" name="designation" value="{{$products->designation}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Prix:</label>
                <input type="text" class="form-control" name="prix" value="{{$products->prix}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Quantite:</label>
                <input type="text" class="form-control" name="quantite" value="{{$products->quantite}}">
            </div>
                
            <select class="form-select" name="categorie">
                @foreach ($categories as $catg)
                <option value="{{ $catg->id }}" {{ $products->categorie_id == $catg->id ? 'selected' : '' }}>
                    {{ $catg->nom }}
                </option>
                @endforeach
              </select>
            <button type="submit" class="btn btn-warning">Modifier</button>
            <a href="{{route('sproduit.index')}}" class="btn btn-secondary">Retour</a>
          </form>
    </div>
@endsection