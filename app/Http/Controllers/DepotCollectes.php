<?php

namespace App\Http\Controllers;
use App\DepotCollecte;
use Illuminate\Http\Request;
//use Illuminate\Support\Collection ;
use App\Http\Controllers\all;
use Illuminate\Support\Collection;
use App\CollecteRecuplasts;
use App\CollectEntreprise;
use App\DepotProduction;
use DB;


class DepotCollectes extends Controller
{

     /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DepotCollecte::orderBy('id', 'DESC')->paginate(5);
        return view('depotCollectes.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $depotCollecte =DepotCollecte::all();
        return view('depotCollectes.create', compact('depotCollecte'));
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
            'date' => 'required',
        ]);

        $input = $request->all();
        $depotCollecte=DepotCollecte::all();
        $quantiteinitiale= $depotCollecte->last()->quantiteinitiale;
        $quantiteEntrante= $depotCollecte->last()->quantiteEntrante;
        $quantiteSortante= $depotCollecte->last()->quantiteSortante;
        $dechet= $depotCollecte->last()->dechet;
        $lastdepot= $depotCollecte->last()->depot;  
        $date=$depotCollecte->last()->date;
        $pphomoSortante=$request->input('pphomoSortante');
        $ppcopoSortante=$request->input('ppcopoSortante');
        $petbouteilleSortante=$request->input('petbouteilleSortante');
        $petpreformSortante=$request->input('petpreformSortante');
        $pehdcasierSortante=$request->input('pehdcasierSortante');
        $pehdsoufflageSortante=$request->input('pehdsoufflageSortante');

        
        
        $collecrecuplaste= CollecteRecuplasts::all();
        $quantiteinitiale= $depotCollecte->last()->quantiteinitiale;
        $lastdepot=$depotCollecte->last()->depot;
        $date=$request->input('date');
        $quantiteSortante=$request->input('quantiteSortante');
        $quantiteEntrante=$request->input('quantiteEntrante');
        $dechet=$request->input('dechet');
        $depot=($lastdepot+$quantiteEntrante)-$quantiteSortante-$dechet;
        $quantiteinitiale=($quantiteinitiale+$quantiteEntrante);

        $collecte=CollectEntreprise::all();
        $totaltri=$collecte->last()->totaltri;



        DB::table('depot_collectes')->insert([
            'quantiteinitiale' => $lastdepot,
            'quantiteEntrante' => $request->input('quantiteEntrante'),
            'depot'=> $depot,
            'ppcopo' =>$depotCollecte->last()->ppcopo-$ppcopoSortante,
            'pphomo' => $depotCollecte->last()->pphomo-$pphomoSortante,
            'petbouteille'=> $depotCollecte->last()->petbouteille-$petbouteilleSortante,
            'petpreform'=>$depotCollecte->last()->petpreform-$petpreformSortante,
            'pehdsoufflage'=>$depotCollecte->last()->pehdsoufflage-$pehdsoufflageSortante,
            'pehdcasier'=>$depotCollecte->last()->pehdcasier-$pehdcasierSortante,
            'quantiteSortante'=>$quantiteSortante,
            'dechet'=>$depotCollecte->last()->dechet,
            'date'=>$date,
            'pphomoSortante'=>$request->input('pphomoSortante'),
            'ppcopoSortante'=>$request->input('ppcopoSortante'),
            'petbouteilleSortante'=>$request->input('petbouteilleSortante'),
            'petpreformSortante'=>$request->input('petpreformSortante'),
            'pehdcasierSortante'=>$request->input('pehdcasierSortante'),
            'pehdsoufflageSortante'=>$request->input('pehdsoufflageSortante'),
            'total'=>$depotCollecte->last()->total-$quantiteSortante-$dechet-$pphomoSortante-$ppcopoSortante-$petbouteilleSortante-$petpreformSortante-$pehdcasierSortante-$pehdsoufflageSortante,
                   ]);
                   //dd($ppcopoSortante);
                   
         $depotProduction=DepotProduction::all();
            $ppcopoSortantepro=$request->input('ppcopoSortantepro');
            $vracSortant=$request->input('vracSortant');
            $pphomoSortantpro=$request->input('pphomoSortantepro');
            $petbouteilleSortantpro=$request->input('petbouteilleSortantepro');
            $petpreformSortantpro=$request->input('petpreformSortantepro');
            $pehdcasierSortantpro=$request->input('pehdcasierSortantepro');
            $pehdsoufflageSortantpro=$request->input('pehdsoufflageSortantepro');
            $dechetproduction=$request->input('dechet');



                   DB::table('depot_productions')->insert([
                    'vracinitiale'=>$vracinitiale=$depotProduction->last()->vrac,
                    'vracEntrant'=>$quantiteSortante,
                    'vracSortant'=>$vracSortant,
                    'vrac'=>$vracinitiale+$quantiteSortante,

                    'pphomoinitiale'=>$pphomoinitiale=$depotProduction->last()->pphomo,
                    'pphomoEntrantpro'=>$pphomoSortante,
                    'pphomoSortantepro'=>$pphomoSortantpro,
                    'pphomo'=>$pphomo=$pphomoinitiale+$pphomoSortante,

                    'ppcopoinitiale'=>$pphomoinitiale=$depotProduction->last()->ppcopo,
                    'ppcopoEntrantpro'=>$ppcopoSortante,
                    'ppcopoSortantepro'=>$ppcopoSortantepro,
                    'ppcopo'=>$ppcopo=$pphomoinitiale+$ppcopoSortante,
                    'pp'=>$ppcopo+$pphomo,

                    'petbouteilleinitiale'=>$petbouteilleinitiale=$depotProduction->last()->petbouteille,
                    'petbouteilleEntrantpro'=>$petbouteilleSortante,
                    'petbouteilleSortantepro'=>$petbouteilleSortantpro,
                    'petbouteille'=>$petbouteille=$petbouteilleinitiale+$petbouteilleSortante,

                    'petpreforminitiale'=>$petpreforminitiale=$depotProduction->last()->petpreform,
                    'petpreformEntrantpro'=>$petpreformSortante,
                    'petpreformSortantepro'=>$petpreformSortantpro,
                    'petpreform'=>$petpreform=$petpreforminitiale+$petpreformSortante,
                    'pet'=>$petpreform+$petbouteille,

                    'pehdcasierinitiale'=>$pehdcasierinitiale=$depotProduction->last()->pehdcasier,
                    'pehdcasierEntrantpro'=>$pehdcasierSortante,
                    'pehdcasierSortantepro'=>$pehdcasierSortantpro,
                    'pehdcasier'=>$pehdcasier=$pehdcasierinitiale+$pehdcasierSortante,

                    'pehdsoufflageinitiale'=>$pehdsoufflageinitiale=$depotProduction->last()->pehdsoufflage,
                    'pehdsoufflageEntrantpro'=>$pehdsoufflageSortante,
                    'pehdsoufflageSortantepro'=>$pehdsoufflageSortantpro,
                    'pehdsoufflage'=>$pehdsoufflage=$pehdsoufflageinitiale+$pehdsoufflageSortante,

                    'pehd'=>$pehdsoufflage+$pehdcasier,
                    'dechet'=>$dechetproduction,
                    'date'=>$date,
                   
                    ]);
        
        return redirect()->route('depotCollectes.index',compact('depotCollecte'))
                        ->with('success', 'depot created successfully');
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depotcollecte = DepotCollecte::find($id);
        return view('depotCollectes.show',compact('depotcollecte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depotCollecte = DepotCollecte::find($id);
        return view('depotCollectes.edit',compact('depotCollecte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $this->validate($request, [
    
        ]);
        $input = $request->all();
        $depotCollecte = DepotCollecte::find($id);
        $pphomo=$request->input('pphomo');
        $ppcopo=$request->input('ppcopo');
        $petbouteille=$request->input('petbouteille');
        $petpreform=$request->input('petpreform');
        $pehdcasier=$request->input('pehdcasier');
        $pehdsoufflage=$request->input('pehdsoufflage');
        $depot=$request->input('depot');
        //$total=$depotCollecte->last()->total;
        //dd($total);
       $firstpetbouteille=$depotCollecte->petbouteille;
       $firstpetpreform=$depotCollecte->petpreform;
       $firstpphomo=$depotCollecte->pphomo;
       $firstppcopo=$depotCollecte->ppcopo;
       $firstpehdcasier=$depotCollecte->pehdcasier;
       $firstpehdsoufflage=$depotCollecte->pehdsoufflage;

       $firstdepot=$depotCollecte->depot;

        $firstotal = $firstpetbouteille+$firstpetpreform+$firstpphomo+$firstppcopo+$firstpehdcasier+$firstpehdsoufflage;

        $totalnew=$ppcopo+$pphomo+$petbouteille+$petpreform+$pehdcasier+$pehdsoufflage+$depot;
        $depotCollecte->update([
            'total' =>$depotCollecte->total-$firstotal+$totalnew,

                   ]);
        $depotCollecte->update($input);

        return redirect()->route('depotCollectes.index')
                        ->with('success','Stock updated successfully');
    }


    
}
