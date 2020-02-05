<?php

namespace App\Http\Controllers;
use App\DepotCollecte;
use Illuminate\Http\Request;
//use Illuminate\Support\Collection ;
use App\Http\Controllers\all;
use Illuminate\Support\Collection;
use App\CollecteRecuplasts;
use App\CollectEntreprise;
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
        
       // $fournisseur = Fournisseur::pluck('nomComplet', 'nomComplet')->all();

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
            //'date_reception' => 'required',
            'date' => 'required',
           // 'prix' => 'required',
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
        $ppSortante=$request->input('ppSortante');
        $petSortante=$request->input('petSortante');
        $pehdSortante=$request->input('pehdSortante');

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
            'quantiteEntrante' => $quantiteEntrante,
            'depot'=> $depot,
            'ppcopo' =>$depotCollecte->last()->ppcopo-$ppcopoSortante,
            'pphomo' => $depotCollecte->last()->pphomo-$pphomoSortante,
            'pet'=> $depotCollecte->last()->pet-$petSortante,
            'pehd'=> $depotCollecte->last()->pehd-$pehdSortante,
            'pp'=>$depotCollecte->last()->pp-$ppSortante,
            'quantiteSortante'=>$quantiteSortante,
            'dechet'=>$depotCollecte->last()->dechet,
            'date'=>$date,
            'pphomoSortante'=>$request->input('pphomoSortante'),
            'ppcopoSortante'=>$request->input('ppcopoSortante'),
            'petSortante'=>$request->input('petSortante'),
            'ppSortante'=>$request->input('ppSortante'),
            'pehdSortante'=>$request->input('pehdSortante'),

            'total'=>$depotCollecte->last()->total-$quantiteSortante-$pphomoSortante-$ppcopoSortante-$ppSortante-$petSortante-$pehdSortante,
                   ]);

        return redirect()->route('depotCollectes.index',compact('depotCollecte'))
                        ->with('success', 'collecte recuplast created successfully');
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
        $pet=$request->input('pet');
        $pp=$request->input('pp');
        $pehd=$request->input('pehd');
        $depot=$request->input('depot');

        //dd($total);
       $firstpehd=$depotCollecte->pehd;
       $firstppcopo=$depotCollecte->ppcopo;
       $firstpphomo=$depotCollecte->pphomo;
       $firstpet=$depotCollecte->pet;
       $firstpp=$depotCollecte->pp;
       $firstdepot=$depotCollecte->depot;


       //dd($pehd);
        if ($firstpehd!=$pehd) {
            $firstpehd=$pehd;

        }
   // dd($firstpehd);
        $totalnew=$ppcopo+$pphomo+$pp+$pet+$pehd+$depot;
        $firstotal=$firstpehd+$firstppcopo+$firstpphomo+$firstpet+$firstpp+$firstdepot;

        $depotCollecte->update([
            'total' =>$depotCollecte->total-$firstotal+$totalnew,

                   ]);
        $depotCollecte->update($input);

        return redirect()->route('depotCollectes.index')
                        ->with('success','Stock updated successfully');
    }
}
