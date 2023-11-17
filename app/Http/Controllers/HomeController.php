<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $AllUsager=Db::table('usagers')->count();
        $active=Db::table('usagers')->where('status', '=', 1)->count();
        $desactive=Db::table('usagers')->where('status', '=', 0)->count();
        $consommation=DB::table('usagers')->sum('consommation');
        $telma=DB::table('usagers')
                ->join('puces','usagers.id_puce','=','puces.id')
                ->where('puces.operateur','=','Telma')
                ->sum('consommation');
        $orange=DB::table('usagers')
                ->join('puces','usagers.id_puce','=','puces.id')
                ->where('puces.operateur','=','Orange')
                ->sum('consommation');
        $airtel=DB::table('usagers')
                ->join('puces','usagers.id_puce','=','puces.id')
                ->where('puces.operateur','=','Airtel')
                ->sum('consommation');
        return view('home',[
            'AllUsager'=>$AllUsager,
            'active'=>$active,
            'desactive'=>$desactive,
            'consommation'=>$consommation,
            'telma'=>$telma,
            'orange'=>$orange,
            'airtel'=>$airtel,
        ]);
    }
}
