<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollecteRecuplasts;
use App\Fournisseur;
use App\DepotCollecte;
use App\CollectEntreprise;
use DB;

class CollectRecuplast extends Controller
{
    /**
       * Display a listing of the resource.
      * @param  int  $id
       * @return \Illuminate\Http\Response
       */
    public function index(Request $request)
    {
        $data = CollecteRecuplasts::orderBy('id', 'DESC')->paginate(5);
        
        $fournisseur = Fournisseur::pluck('nomComplet', 'nomComplet')->all();
    
        return view('collecterecuplasts.index', compact('data', 'fournisseur'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fournisseurs =Fournisseur::all();
        $collecteRecuplasts = CollecteRecuplasts::pluck('fournisseur','numerobon', 'date_reception', 'quantite', 'reglement_definitif', 'commentaire', 'prix', 'montant')->all();

        return view('collecterecuplasts.create', compact('collecteRecuplasts', 'fournisseurs'));
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
            'date_reception' => 'required',
            'quantite' => 'required',
            'prix' => 'required',
            'numerobon' => 'unique:collecte_recuplasts,numerobon',

        ]);

        $input = $request->all();
        $fournisseurs = Fournisseur::all();
        $collecteRecuplasts = CollecteRecuplasts::all();
        $collecte = CollectEntreprise::all();
        $totaltri= $collecte->last()->totaltri;
//dd($totaltri);
      
        $date = (1542635);
        $min_epoch = strtotime($date);
        $rand_epoch = rand($min_epoch,1222222);

        $depotCollecte=DepotCollecte::all();
        $quantiteinitiale= $depotCollecte->last()->quantiteinitiale;
        $quantiteEntrante= $depotCollecte->last()->quantiteEntrante;
        $quantiteSortante= $depotCollecte->last()->quantiteSortante;
        $dechet= $depotCollecte->last()->dechet;
        $lastdepot= $depotCollecte->last()->depot;

        $depotCollecte->last()->total;  

        $date=$request->input('date_reception');
            //dd($date);
    $quantiteEntrante=$quantites=$request->input('quantite');
    $depot=($lastdepot+$quantiteEntrante)-$quantiteSortante-$dechet;
    $total=$quantiteEntrante-$quantiteSortante-$dechet+$depotCollecte->last()->total;
    //dd($total);
    $numero45= $collecteRecuplasts->numerobon=$rand_epoch;
    DB::table('depot_collectes')->insert([
        'quantiteinitiale' => $lastdepot,
        'quantiteEntrante' => $quantiteEntrante,
        //'quantiteSortante' => $quantiteSortante,
        'depot'=> $depot,
        'ppcopo' =>$depotCollecte->last()->ppcopo,
        'pphomo' => $depotCollecte->last()->pphomo,
        'petbouteille'=> $depotCollecte->last()->petbouteille,
        'petpreform'=> $depotCollecte->last()->petpreform,
        'pehdcasier'=>$depotCollecte->last()->pehdcasier,
        'pehdsoufflage'=>$depotCollecte->last()->pehdsoufflage,
        'dechet'=>$depotCollecte->last()->dechet,
        'date'=>$date,
        'total'=>$total,
    ]);
        DB::table('collecte_recuplasts')->insert([
            'numerobon' => $numero45,
            'fournisseur'=> $request->input('fournisseur'),
             'date_reception'=>$request->input('date_reception'),
              'quantite'=>$request->input('quantite'), 
               'commentaire'=>$request->input('commentaire'),
                'prix'=>$request->input('prix'),
        ]);
    
        return redirect()->route('collecterecuplasts.index', compact('collecteRecuplasts','fournisseurs','depotCollecte'))
                        ->with('success', 'collecte recuplast created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collecteRecuplasts = CollecteRecuplasts::find($id);
        $fournisseurs = Fournisseur::all();

        return view('collecterecuplasts.edit', compact('collecteRecuplasts', 'fournisseurs'));
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
            'date_reception' => 'required',
            'quantite' => 'required',
            
        ]);
        $input = $request->all();
        $depotCollecte=DepotCollecte::all();
        //dd($depotCollecte);
         $quantiteEntrante=$quantites=$request->input('quantite');
       //dd($quantiteEntrante);
        $quantiteinitiale= $depotCollecte->last()->quantiteinitiale;
       //dd($quantiteEntrante);

        $quantiteSortante= $depotCollecte->last()->quantiteSortante;
//        $quantiteSortante= $depotCollecte->last()->quantiteSortante;

        $quantiteEntrantes= $depotCollecte->last()->quantiteEntrante;
        $depot= $depotCollecte->last()->depot;
    $quantiteEntrante=$quantites=$request->input('quantite');
    $newvalue= $depotCollecte->last()->quantiteEntrante;
    $newvaluedepot= $depotCollecte->last()->quantiteinitiale;

        if ($newvalue!=$quantiteEntrante) {
            
            $newvalue=$quantiteEntrante;
            $newvaluedepot=$depotCollecte->last()->depot;
            $newvaluedepot=($quantiteinitiale-$quantiteEntrantes)+$newvalue;
           // dd($newvaluedepot);

            $depotCollecte->last()->update([
                'quantiteinitiale' => $newvaluedepot,
                'quantiteEntrante' => $newvalue,
                'depot'=>$newvaluedepot,
         
                       ]);
        }
   
        $collecteRecuplasts = CollecteRecuplasts::find($id);
        $collecteRecuplasts->update($input);


        return redirect()->route('collecterecuplasts.index')
                        ->with('success', 'collecte recuplast updated successfully');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        CollecteRecuplasts::find($id)->delete();
        return redirect()->route('collecterecuplasts.index')
                        ->with('success','collecte recuplasts deleted successfully');
    }
}
