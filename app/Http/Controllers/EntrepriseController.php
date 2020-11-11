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
            'prixppcopo',
            'dechet',
            'pet',
            'pehd',
            'date_collecte',
            'reglement_definitif',
            'commentaire',
            'numerobons',
            'totaltri',
            'petbouteille',
            'petbouteilleprix',
            'petpreform',
            'petpreformprix',
            'pehdcasier',
            'pehdcasierprix',
            'pehdsoufflage',
            'pehdsoufflageprix',)->all();
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
            'date_collecte'=> 'required',

            'pphomo' => 'required',
            'ppcopo'=> 'required',
            'prixpphomo'=> 'required',
            'prixppcopo'=> 'required',

            'petbouteille'=> 'required',
            'petbouteilleprix'=> 'required',
            'petpreform'=> 'required',
            'petpreformprix'=> 'required',

            'pehdcasier'=> 'required',
            'pehdcasierprix'=> 'required',
            'pehdsoufflage'=> 'required',
            'pehdsoufflageprix'=> 'required',


        ]);

        $input = $request->all();
        $fournisseurs= Fournisseur::all();
        $collectEntreprises = CollectEntreprise::all();
        $collectRecuplasts = CollecteRecuplasts::all();
        $date = (154263);
        $min_epoch = strtotime($date);
        $rand_epoch = rand($min_epoch,1222222);
        $numerobons= $collectEntreprises->numerobons=$rand_epoch;

        $pehdcasier=$request->input('pehdcasier');
        $pehdsoufflage=$request->input('pehdsoufflage');
        $totalpehd=$pehdcasier+$pehdsoufflage;

        $petbouteille=$request->input('petbouteille');
        $petpreform=$request->input('petpreform');
        $totalpet=$petpreform+$petbouteille;

        $pphomo=$request->input('pphomo');
        $ppcopo=$request->input('ppcopo');
       
        $totalpp=$pphomo+$ppcopo;
        $totaltriss=$totalpehd+$totalpp+$totalpet-$request->input('dechet');

        $totaltri=$collectEntreprises->last()->totaltri+$totaltriss;
       // dd($collectEntreprises->last()->totaltri);
       // dd($totaltri);
        DB::table('collect_entreprises')->insert([
            'numerobons' => $numerobons,
            'fournisseur_id'=> $request->input('fournisseur_id'),
            'date_collecte'=>$request->input('date_collecte'),
            'pphomo'=>$request->input('pphomo'), 
            'commentaire'=>$request->input('commentaire'),
            
            'prixpphomo'=>$request->input('prixpphomo'),
            'prixppcopo'=>$request->input('prixppcopo'),
            'ppcopo'=>$request->input('ppcopo'),
            'dechet'=>$request->input('dechet'),

            'petbouteille'=> $request->input('petbouteille'),
            'petbouteilleprix'=> $request->input('petbouteilleprix'),
            'petpreform'=> $request->input('petpreform'),
            'petpreformprix'=> $request->input('petpreformprix'),

            'pehdcasier'=> $request->input('pehdcasier'),
            'pehdcasierprix'=> $request->input('pehdcasierprix'),
            'pehdsoufflage'=> $request->input('pehdsoufflage'),
            'pehdsoufflageprix'=> $request->input('pehdsoufflageprix'),

            'totaltri' =>$totaltri,
            'pet'=>$totalpet,
            'pehd'=>$totalpehd,
            'pp'=>$totalpp,

        ]);
     
        $depotCollecte=DepotCollecte::all();
        $lastdepot= $depotCollecte->last()->depot;  
        $pphomo= $depotCollecte->last()->pphomo+$request->input('pphomo');
        $ppcopo= $depotCollecte->last()->ppcopo+$request->input('ppcopo');
        $petbouteille= $depotCollecte->last()->petbouteille+$request->input('petbouteille');
        $petpreform= $depotCollecte->last()->petpreform+$request->input('petpreform');
        $pehdcasier= $depotCollecte->last()->pehdcasier+$request->input('pehdcasier');
        $pehdsoufflage= $depotCollecte->last()->pehdsoufflage+$request->input('pehdsoufflage');

        $pet=$request->input('petpreform')+$request->input('petbouteille');
        $pehd=$request->input('pehdcasier')+$request->input('pehdsoufflage');
        $pp=$request->input('pphomo')+$request->input('ppcopo');
        $dechet= $request->input('dechet');

       $total= $pet+$pehd+$pp-$dechet;
        // dd( $total);
        //dd($depotCollecte->last()->total+$total+$lastdepot);

        $date=$request->input('date_collecte');
        
    DB::table('depot_collectes')->insert([
        'petbouteille'=> $petbouteille,
        'petpreform'=> $petpreform,
        'pehdcasier'=> $pehdcasier,
        'pehdsoufflage'=> $pehdsoufflage,
        'ppcopo' =>$ppcopo,
        'pphomo' => $pphomo,
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
 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collectEntreprises = CollectEntreprise::find($id);
        $fournisseurs = Fournisseur::all();

        return view('collectes.edit', compact('collectEntreprises', 'fournisseurs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
        ]);
        $input = $request->all();
        $collectEntreprises = CollectEntreprise::find($id);
        $collectEntreprises->update($input);


        return redirect()->route('collectes.index')
                        ->with('success', 'collecte recuplast updated successfully');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        CollectEntreprise::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
