<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::with('categorie')->get();
        //$categories = Categorie::all();
        return view('sproduit.list',compact('produits') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('sproduit.ajouter',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Produit::create($request->all());
        return redirect()->route('sproduit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Produit::find($id);
        $categories = Categorie::all();
        return view('sproduit.edit',compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Produit::find($id);
        $products->update([
            "ref"=>$request->reference,
            "designation"=>$request->designation,
            "quantite"=>$request->quantite,
            "prix"=>$request->prix,
            "categorie_id"=>$request->categorie
        ]);
        return redirect()->route('sproduit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Produit::find($id);
        $products->delete();
        return redirect()->route('sproduit.index');
    }
}
