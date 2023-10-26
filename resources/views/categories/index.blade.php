@extends('sproduit.contenue')
@section('content')
<div style="margin-top:10%">
   
    <h2>liste des catégories</h2>
    <a class="btn btn-success" href="{{route('categorie.create')}}">Ajouter catégorie</a>
    <a class="btn btn-secondary" href="{{route('sproduit.index')}}">Retour</a>
    <table class="table"  style="width: 60%">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Produits en Relations</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
    @isset($categoryelq)
        @foreach ($categoryelq as $ctegorie )
            <tbody>
                <tr>
                    <td>{{$ctegorie->id}}</td>
                    <td>{{$ctegorie->nom}}</td>
                    <td> 
                        <ul>
                            @foreach ($ctegorie->produits as $produit)
                                <li>{{ $produit->ref }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <form action="{{route('categorie.destroy',$ctegorie->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('categorie.edit',$ctegorie->id)}}" class="btn btn-warning">Modifier</a>
                            <button href="{{route('categorie.destroy',$ctegorie->id)}}" type="submit" class="btn btn-danger" onclick="return confirm('voulez vous supprimer cette categorie ! ')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    @endisset
        </table>
</div>

@endsection