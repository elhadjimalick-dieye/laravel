<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollectEntreprise;
use App\Fournisseur;
use App\DepotCollecte;
use App\CollecteRecuplasts;
use DB;

class EntrepriseController extends Controller
{

    /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = CollectEntreprise::orderBy('id','DESC')->paginate(5);
        $fournisseurs = Fournisseur::pluck('nomComplet','nomComplet')->all();

        return view('collectes.index',compact('data','fournisseurs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
            

    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::all();
        $collectEntreprises = CollectEntreprise::pluck(
        'fournisseur_id',
        'pphomo',
        'prixpphomo',
        'ppcopo',
        'prixcopo',
        'dechet',
        'pet',
        'prixpet',
        'pehd',
        'prixpehd',
        'date_collecte',
        'reglement_definitif',
        'commentaire',
        'numerobons',
        'prixpp')->all();
        return view('collectes.create',compact('collectEntreprises','fournisseurs'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fournisseur_id' => 'required',
            'pphomo' => 'required',
            'ppcopo'=> 'required',
            'dechet'=> 'required',
            'pet'=> 'required',
            'pehd'=> 'required',
            'date_collecte'=> 'required',
            'pp'=> 'required',
            'prixpphomo'=> 'required',
            'prixppcopo'=> 'required',
            'prixpet'=> 'required',
            'prixpehd'=> 'required',
            'prixpp'=> 'required',


        ]);

        $input = $request->all();
        $fournisseurs= Fournisseur::all();
        $collectEntreprises = CollectEntreprise::all();
        $collectRecuplasts = CollecteRecuplasts::all();


        $date = (154263);
        $min_epoch = strtotime($date);
        $rand_epoch = rand($min_epoch,1222222);
        $numerobons= $collectEntreprises->numerobons=$rand_epoch;
        $totaltriss=$request->input('pehd')+$request->input('pphomo')+$request->input('ppcopo')+$request->input('pet')+$request->input('pp')-$request->input('dechet');

        $totaltri=$collectEntreprises->last()->totaltri+$totaltriss;
       // dd($collectEntreprises->last()->totaltri);
       // dd($totaltri);
        DB::table('collect_entreprises')->insert([
            'numerobons' => $numerobons,
            'fournisseur_id'=> $request->input('fournisseur_id'),
            'date_collecte'=>$request->input('date_collecte'),
            'pphomo'=>$request->input('pphomo'), 
            'commentaire'=>$request->input('commentaire'),
            'pet'=>$request->input('pet'),
            'prixpet'=>$request->input('prixpet'),
            'pehd'=>$request->input('pehd'),
            'prixpehd'=>$request->input('prixpehd'),
            'prixpphomo'=>$request->input('prixpphomo'),
            'prixppcopo'=>$request->input('prixppcopo'),
            'ppcopo'=>$request->input('ppcopo'),
            'prixpp'=>$request->input('prixpp'),
            'pp'=>$request->input('pp'),
            'dechet'=>$request->input('dechet'),
            'totaltri' =>$totaltri,

        ]);
     
        $depotCollecte=DepotCollecte::all();
        $lastdepot= $depotCollecte->last()->depot;  
        $pphomo= $depotCollecte->last()->pphomo+$request->input('pphomo');
        $ppcopo= $depotCollecte->last()->ppcopo+$request->input('ppcopo');
        $pet= $depotCollecte->last()->pet+$request->input('pet');
        $pehd= $depotCollecte->last()->pehd+$request->input('pehd');
        $pp= $depotCollecte->last()->pp+$request->input('pp');
        $dechet= $request->input('dechet');

       $total= $request->input('ppcopo')+$request->input('pphomo')+$request->input('pet')+$request->input('pehd')+$request->input('pp')-$dechet;
        // dd( $total);
        //dd($depotCollecte->last()->total+$total+$lastdepot);

        $date=$request->input('date_collecte');
        
    DB::table('depot_collectes')->insert([
        'ppcopo' =>$ppcopo,
        'pphomo' => $pphomo,
        'pet'=> $pet,
        'pehd'=> $pehd,
        'pp'=> $pp,
        'dechet'=> $dechet,
        'quantiteinitiale'=> $lastdepot,
        'quantiteEntrante'=> $depotCollecte->last()->quantiteEntrante,
        'depot'=> $lastdepot,
        'date'=>$date,
        'total'=>$depotCollecte->last()->total+$total,

    ]);
      //  $collectEntreprises = CollectEntreprise::create($input);
        return redirect()->route('collectes.index',compact('collectEntreprises','fournisseurs'))
        ->with('success','collecte entreprise created successfully');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseurs= Fournisseur::all();

        $collectEntreprises = CollectEntreprise::find($id);
        return view('collectes.show',compact('collectEntreprises','fournisseurs'));
    }

}
