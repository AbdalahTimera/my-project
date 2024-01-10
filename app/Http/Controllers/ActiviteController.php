<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    //
    public function index()
    {
        $listes_activite =  Activite::all();
        return view("activites.liste", ["nos_activites" => $listes_activite]);
    }

    public function ajouter_activite(){
        return view("activites.ajouter");
    }

    public function ajouter_enregistrer(Request $request){
        $request->validate([
            'libelle' => 'required',
            'budget' => 'required',
            'date' => 'required',
            'rapport' => 'required',
            'statut' => 'required'
        ]);
        $activite = new Activite();
        $activite->libelle = $request->libelle;
        $activite->budget = $request->budget;
        $activite->date = $request->date;
        $activite->rapport = $request->rapport;
        $activite->statut = $request->has('statut') ? 1 : 0;

        $activite->save();
        return \redirect('/ajouter')->with('message', 'Insertion Reussi !');
    }

    public function modifier_activite($id){
        $activite = Activite::find($id);
        return view("activites.modifier", compact('activite'));
    }
    
    public function modifier_activite_enregistrer(Request $request){
        $request->validate([
            'libelle' => 'required',
            'budget' => 'required',
            'date' => 'required',
            'rapport' => 'required',
            'statut' => 'required'
        ]);
        $activite = Activite::find($request->id);
        $activite->libelle = $request->libelle;
        $activite->budget = $request->budget;
        $activite->date = $request->date;
        $activite->rapport = $request->rapport;
        $activite->statut = $request->has('statut') ? 1 : 0;

        $activite->update();
        return redirect('/liste-activites')->with('message', 'Modification Reussi !');
    }

    public function supprimer_activite($id){
        $activite = Activite::find($id);
        $activite->delete();

        return \redirect('/liste-activites')->with('message', 'Suppression Reussi !');
    }
}
