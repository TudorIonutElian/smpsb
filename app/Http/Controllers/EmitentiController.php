<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActeCollection;
use Illuminate\Http\Request;

// Importing Models
use App\Models\Emitenti;

// Importing Resources
use App\Http\Resources\ActeEmitentCollection;
use App\Http\Resources\EmitentiCollection;
use App\Models\IstoricRadieri;
use Illuminate\Support\Facades\DB;

class EmitentiController extends Controller
{
    // Afisare toti Emitentii
    public function index()
    {
        return EmitentiCollection::collection(Emitenti::all());
    }

    // Adaugare Emitent in baza de date
    public function adaugare(Request $request)
    {
        $emitent = new Emitenti;
        $emitent->denumire                              = $request->denumire;
        $emitent->data_incepere_activitate              = $request->dataIncepereActivitate;
        $emitent->stare                                 = 1;
        $emitent->save();

        return response()->json([
            'mesaj' => true
        ], 200);
    }

    // Preluare acte emise de emitent
    public function getActe($id)
    {
        return ActeEmitentCollection::collection(DB::table('acte')->where('emitent', $id)->get());
    }

    // Radiere emitent
    public function radiere(Request $request)
    {
        // Identificare Emitent in baza id-ului
        $emitent_id = $request->emitentSelectat;
        $emitent = Emitenti::find($emitent_id);

        // Radiere
        $emitent->data_incheiere_activitate = $request->data_radiere;
        $emitent->stare = 0;
        $emitent->save();


        $istoricRadiere = new IstoricRadieri;
        $istoricRadiere->emitent        = $request->emitentSelectat;
        $istoricRadiere->data_radiere   = $request->data_radiere;
        $istoricRadiere->save();

        
        // Returnare mesaj ok
        return response()->json([
            'mesaj' => 'Emitentul a fost radiat! Operatiunea a fost salvata in istoric!',
            'radiere' => true
        ], 200);

    }
}
