<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    //
    public function index()
    {
        $liste_projet = Projet::all();
        return view("projets.liste", ["nos_projets" => $liste_projet]);
    }
    public function ajouter_produit()
    {
        return view("projets.ajouter");
    }

    public function ajouter_produit_save(Request $request)
{
    $request->validate([
        'code' => 'required',
        'nom' => 'required',
        'description' => 'required',
        'budget' => 'required',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'statut' => 'required'
    ]);

    $projet = new Projet();
    $projet->code = $request->code;
    $projet->nom = $request->nom;
    $projet->description = $request->description;
    $projet->budget = $request->budget;
    $projet->date_debut = $request->date_debut;
    $projet->date_fin = $request->date_fin;
    $projet->statut = $request->has('statut') ? 1 : 0;
    $projet->save();
    
    //Projet::create($request->all());

    return redirect('/ajouter')->with('message', 'ADD');
}
    public function modifier_produit($id)
    {
        $projet = Projet::find($id);
        return view('projets.modifier', compact('projet'));
    }

    public function modifier_produit_save(Request $request)
{
    $request->validate([
        'code' => 'required',
        'nom' => 'required',
        'description' => 'required',
        'budget' => 'required',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'statut' => 'required'
    ]);

    $projet = Projet::find($request->id);
    $projet->code = $request->code;
    $projet->nom = $request->nom;
    $projet->description = $request->description;
    $projet->budget = $request->budget;
    $projet->date_debut = $request->date_debut;
    $projet->date_fin = $request->date_fin;
    $projet->statut = $request->has('statut') ? 1 : 0;


    $projet->update();

    return redirect('/liste-projets')->with('message', 'MODIFY');
}
    public function supprimer_produit($id)
    {
        $projet = Projet::find($id);
        $projet->delete();
        return redirect('/liste-projets')->with('message', 'Delete Successed');
    }
}
