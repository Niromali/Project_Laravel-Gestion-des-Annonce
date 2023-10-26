@extends('sproduit.contenue')

@section('content')

<div style="text-align:center; margin-top:10%">
<h2 style="display:inline-block; margin-right: 20px;">Liste des produits</h2>

    <a class="btn btn-success" href="{{ route('sproduit.create') }}">Ajouter Produit</a>
    <a class="btn btn-primary" href="{{ route('categorie.index') }}" style="margin-left:50%">Listes catégories</a>
    
    
    
    <table class="table" style="margin-top:20px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Référence</th>
                <th scope="col">Désignation</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantité</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @isset($produits)
                @foreach ($produits as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->ref }}</td>
                        <td>{{ $p->designation }}</td>
                        <td>{{ $p->prix }}</td>
                        <td>{{ $p->quantite }}</td>
                        <td>{{ $p->categorie->nom }}</td>
                        <td>
                            <form action="{{ route('sproduit.destroy', $p->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('sproduit.edit', $p->id) }}" class="btn btn-warning">Modifier</a>
                                <button href="{{ route('sproduit.destroy', $p->id) }}" type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ce produit ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</div>
@endsection
