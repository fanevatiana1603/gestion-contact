<?php

namespace App\Http\Controllers\Usager;

use App\Http\Controllers\Controller;
use App\Models\Usager;
use App\Models\Offre;
use App\Models\Puce;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usager=DB::table('usagers')
                ->join('puces','usagers.id_puce','=','puces.id')
                ->join('offres','usagers.id_offre','=','offres.id')
                ->join('tarif_forfaits','usagers.forfait_id','=','tarif_forfaits.id')
                ->leftjoin('forfaits','forfaits.id','=','tarif_forfaits.id_forfait')
                ->leftjoin('tarifs','tarifs.id','=','tarif_forfaits.id_tarif',)
                ->select('puces.*','offres.*','tarif_forfaits.*','forfaits.*','tarifs.*','usagers.*')
                ->get();

        $offre=Offre::all();

        $puce=Puce::all();

        $forfait = DB::table('tarif_forfaits')
                    ->join('forfaits','forfaits.id','=','tarif_forfaits.id_forfait')
                    ->join('tarifs','tarifs.id','=','tarif_forfaits.id_tarif',)
                    ->select('forfaits.*','tarifs.*','tarif_forfaits.*')
                    ->get();

                    

        return view('Flotte.Usager.index',[
            'usager'=>$usager,
            'puce'=>$puce,
            'forfait'=>$forfait,
            'offre'=>$offre,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reponse = DB::table('usagers')->insert($request->except('_token'));

         if ($reponse) {
            session()->flash('message', 'L\'élément a été ajouté avec succès.');
             return redirect()->route('flotte.usager.index');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function show(Usager $usager)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function edit(Usager $usager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usager $usager)
    {
        $usager->nom = $request->nom;
        $usager->prenom = $request->prenom;
        $usager->direction = $request->direction;
        $usager->service = $request->service;
        $usager->consommation = $request->consommation;
        $usager->localite = $request->localite;
        $usager->forfait_id = $request->forfait_id;
        $usager->id_offre = $request->id_offre;
        $usager->id_puce = $request->id_puce;

        $usager->save();

        if ($usager) {
             return redirect()->route('flotte.usager.index');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usager $usager)
    {
       $usager->delete();
        session()->flash('message-delete', 'L\'élément a été supprimer avec succès.');
        return back();
    }
}
