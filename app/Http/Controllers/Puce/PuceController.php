<?php

namespace App\Http\Controllers\Puce;

use App\Http\Controllers\Controller;
use App\Models\Puce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puce = DB::table('puces')
                ->get();           

        return view('Flotte.Puce.index',[
            'puce'=>$puce,
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
        $reponse = DB::table('puces')->insert($request->except('_token'));

         if ($reponse) {
            session()->flash('message', 'L\'élément a été ajouté avec succès.');
             return redirect()->route('flotte.puce.index');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puce  $puce
     * @return \Illuminate\Http\Response
     */
    public function show(Puce $puce)
    {
        //  Fonction pour supprimer

        $puce->delete();

        return redirect()->route('flotte.puce.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puce  $puce
     * @return \Illuminate\Http\Response
     */
    public function edit(Puce $puce)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puce  $puce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puce $puce)
    {
        $puce->numero = $request->numero;
        $puce->numpuk = $request->numpuk;
        $puce->numserial = $request->numserial;

        $puce->save();

        if ($puce) {
           return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puce  $puce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puce $puce)
    {
        $puce->delete();
        session()->flash('message-delete', 'L\'élément a été supprimer avec succès.');
        return redirect()->route('flotte.puce.index');
    }
}
