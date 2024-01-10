<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    //
    public function index()
    {
        $liste_zone = Zone::all();
        return view("zones.liste", ["nos_zones" => $liste_zone]);

    }

    public function ajouter_zone()
    {
        return view("zones.ajouter");

    }

    public function ajouter_enregistrer(Request $request)
    {
        $request->validate(['libelle' => 'required']);
        $zone = new Zone();
        $zone->libelle = $request->libelle;

        $zone->save();
        return \redirect('/ajouterzone')->with('message', 'ADDED');

    }

    public function modifier_zone($id)
    {
        $zone = Zone::find($id);
        return view('zones.modifier', compact('zone'));

    }

    public function modifier_zone_enregistrer(Request $request)
    {
        $request->validate(['libelle' => 'required']);

        $zone = Zone::find($request->id);
        $zone->libelle = $request->libelle;

        $zone->update();
        return redirect('/liste-zones');

    }
    
    public function supprimer_zone($id)
    {
        $zone = Zone::find($id);
        $zone->delete();
        return \redirect('/liste-zones')->with('message', 'DELETED');

    }
}
