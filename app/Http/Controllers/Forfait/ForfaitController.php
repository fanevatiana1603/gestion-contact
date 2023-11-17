<?php

namespace App\Http\Controllers\Forfait;

use App\Http\Controllers\Controller;
use App\Models\Forfait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = DB::table('tarif_forfaits')
                    ->join('forfaits','forfaits.id','=','tarif_forfaits.id_forfait')
                    ->join('tarifs','tarifs.id','=','tarif_forfaits.id_tarif',)
                    ->select('forfaits.*','tarifs.*','tarif_forfaits.*')
                    ->get();
        $forf = DB::table('forfaits')->get();
        $tarif = DB::table('tarifs')->get();
        return view('Flotte.Forfait.index',[
            'forfaits'=>$forfaits,
            'forf'=>$forf,
            'tarif'=>$tarif,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        return "foction <h1>Show</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        return "foction <h1>Edit</h1>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forfait $forfait)
    {
        $forfait->id_forfait = $request->id_forfait;
        $forfait->id_tarif = $request->id_tarif;
        $forfait->prix = $request->prix;

        $forfait->save();

        if($forfait){
            return redirect()->route('flotte.forfait.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forfait $forfait)
    {
        return "foction <h1>Delete</h1>";
    }
}
