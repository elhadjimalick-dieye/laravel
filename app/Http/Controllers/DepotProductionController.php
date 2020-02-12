<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepotProduction;
use App\Triage;
use DB;
class DepotProductionController extends Controller
{
  /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DepotProduction::orderBy('id', 'DESC')->paginate(5);
        return view('depotProductions.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $depotProduction =DepotProduction::all();
        return view('depotProductions.create', compact('depotProduction'));
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
        $depotProduction=DepotProduction::all();
        $vracSortant=$request->input('vracSortant');
            $vracEntrant=$request->input('vracEntrant');
            $ppcopoSortantepro=$request->input('ppcopoSortantepro');
            $ppcopoEntrantpro=$request->input('ppcopoEntrantpro');

            $pphomoSortantepro=$request->input('pphomoSortantepro');
            $pphomoEntrantpro=$request->input('pphomoEntrantpro');

            $petbouteilleSortantpro=$request->input('petbouteilleSortantepro');
            $petbouteilleEntrantpro=$request->input('petbouteilleEntrantpro');

            $petpreformSortantpro=$request->input('petpreformSortantepro');
            $petpreformEntrantpro=$request->input('petpreformEntrantpro');

            $pehdcasierSortantpro=$request->input('pehdcasierSortantepro');
            $pehdcasierEntrantpro=$request->input('pehdcasierEntrantpro');

            $pehdsoufflageSortantpro=$request->input('pehdsoufflageSortantepro');
            $pehdsoufflageEntrantpro=$request->input('pehdsoufflageEntrantpro');

            $dechetproduction=$request->input('dechet');
            $date=$request->input('date');

            DB::table('depot_productions')->insert([
            'vracinitiale'=>$vracinitiale=$depotProduction->last()->vrac,
            'vracEntrant'=>$vracEntrant,
            'vracSortant'=>$vracSortant,
            'vrac'=>$vracinitiale-$vracSortant,
     
            'pphomoinitiale'=>$pphomoinitiale=$depotProduction->last()->pphomo,
            'pphomoEntrantpro'=>$pphomoEntrantpro,
            'pphomoSortantepro'=>$pphomoSortantepro,
            'pphomo'=>$pphomo=$pphomoinitiale-$pphomoSortantepro,

            'ppcopoinitiale'=>$pphomoinitiale=$depotProduction->last()->ppcopo,
            'ppcopoEntrantpro'=>$ppcopoEntrantpro,
            'ppcopoSortantepro'=>$ppcopoSortantepro,
            'ppcopo'=>$ppcopo=$pphomoinitiale-$ppcopoSortantepro,
            'pp'=>$ppcopo+$pphomo,

            'petbouteilleinitiale'=>$petbouteilleinitiale=$depotProduction->last()->petbouteille,
            'petbouteilleEntrantpro'=>$petbouteilleEntrantpro,
            'petbouteilleSortantepro'=>$petbouteilleSortantpro,
            'petbouteille'=>$petbouteille=$petbouteilleinitiale-$petbouteilleSortantpro,

            'petpreforminitiale'=>$petpreforminitiale=$depotProduction->last()->petpreform,
            'petpreformEntrantpro'=>$petpreformEntrantpro,
            'petpreformSortantepro'=>$petpreformSortantpro,
            'petpreform'=>$petpreform=$petpreforminitiale-$petpreformSortantpro,
            'pet'=>$petpreform+$petbouteille,

            'pehdcasierinitiale'=>$pehdcasierinitiale=$depotProduction->last()->pehdcasier,
            'pehdcasierEntrantpro'=>$pehdcasierEntrantpro,
            'pehdcasierSortantepro'=>$pehdcasierSortantpro,
            'pehdcasier'=>$pehdcasier=$pehdcasierinitiale-$pehdcasierSortantpro,

            'pehdsoufflageinitiale'=>$pehdsoufflageinitiale=$depotProduction->last()->pehdsoufflage,
            'pehdsoufflageEntrantpro'=>$pehdsoufflageEntrantpro,
            'pehdsoufflageSortantepro'=>$pehdsoufflageSortantpro,
            'pehdsoufflage'=>$pehdsoufflage=$pehdsoufflageinitiale-$pehdsoufflageSortantpro,

            'pehd'=>$pehdsoufflage+$pehdcasier,
            'dechet'=>$dechetproduction,
            'date'=>$date,
            
            ]);


            $triage=Triage::all();
            $ppcopoSortantetr=$request->input('ppcopoSortantetr');
            $vracSortanttr=$request->input('vracSortanttr');
            $pphomoSortanttr=$request->input('pphomoSortantetr');
            $petbouteilleSortanttr=$request->input('petbouteilleSortantetr');
            $petpreformSortanttr=$request->input('petpreformSortantetr');
            $pehdcasierSortanttr=$request->input('pehdcasierSortantetr');
            $pehdsoufflageSortanttr=$request->input('pehdsoufflageSortantetr');
            $dechetproductiontr=$request->input('dechettr');
           // dd($pehdsoufflageSortantpro);
                   DB::table('triages')->insert([
                    'vracinitialetr'=>$vracinitialetr=$triage->last()->vractr,
                    'vracEntranttr'=>$vracSortant,
                    'vracSortanttr'=>$vracSortanttr,
                    'vractr'=>$vracinitialetr+$vracSortant,

                    'pphomoinitialetr'=>$pphomoinitialetr=$triage->last()->pphomotr,
                    'pphomoEntranttr'=>$pphomoSortantepro,
                    'pphomoSortantetr'=>$pphomoSortanttr,
                    'pphomotr'=>$pphomotr=$pphomoinitialetr+$pphomoSortantepro,

                    'ppcopoinitialetr'=>$pphomoinitialetr=$triage->last()->ppcopotr,
                    'ppcopoEntranttr'=>$ppcopoSortantepro,
                    'ppcopoSortantetr'=>$ppcopoSortantetr,
                    'ppcopotr'=>$ppcopotr=$pphomoinitialetr+$ppcopoSortantepro,
                    'pptr'=>$ppcopotr+$pphomotr,

                    'petbouteilleinitialetr'=>$petbouteilleinitialetr=$triage->last()->petbouteilletr,
                    'petbouteilleEntranttr'=>$petbouteilleSortantpro,
                    'petbouteilleSortantetr'=>$petbouteilleSortanttr,
                    'petbouteilletr'=>$petbouteilletr=$petbouteilleinitialetr+$petbouteilleSortantpro,

                    'petpreforminitialetr'=>$petpreforminitialetr=$triage->last()->petpreformtr,
                    'petpreformEntranttr'=>$petpreformSortantpro,
                    'petpreformSortantetr'=>$petpreformSortanttr,
                    'petpreformtr'=>$petpreformtr=$petpreforminitialetr+$petpreformSortantpro,
                    'pettr'=>$petpreformtr+$petbouteilletr,

                    'pehdcasierinitialetr'=>$pehdcasierinitialetr=$triage->last()->pehdcasiertr,
                    'pehdcasierEntranttr'=>$pehdcasierSortantpro,
                    'pehdcasierSortantetr'=>$pehdcasierSortanttr,
                    'pehdcasiertr'=>$pehdcasiertr=$pehdcasierinitialetr+$pehdcasierSortantpro,

                    'pehdsoufflageinitialetr'=>$pehdsoufflageinitialetr=$triage->last()->pehdsoufflagetr,
                    'pehdsoufflageEntranttr'=>$pehdsoufflageSortantpro,
                    'pehdsoufflageSortantetr'=>$pehdsoufflageSortanttr,
                    'pehdsoufflagetr'=>$pehdsoufflagetr=$pehdsoufflageinitialetr+$pehdsoufflageSortantpro,

                    'pehdtr'=>$pehdsoufflagetr+$pehdcasiertr,
                    'dechettr'=>$dechetproductiontr,
                    'date'=>$date,
                   
                    ]);

         // dd($vracinitialetr+$vracSortant);

        return redirect()->route('depotProductions.index',compact('depotProduction'))
                        ->with('success','depot created successfully');
    }

             /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depotProduction = DepotProduction::find($id);
        return view('depotProductions.show',compact('depotProduction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depotProduction = DepotProduction::find($id);
        return view('depotProductions.edit',compact('depotProduction'));
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
        $depotProduction = DepotProduction::find($id);
        $pphomo=$request->input('pphomo');
        $ppcopo=$request->input('ppcopo');
        $petbouteille=$request->input('petbouteille');
        $petpreform=$request->input('petpreform');
        $pehdcasier=$request->input('pehdcasier');
        $pehdsoufflage=$request->input('pehdsoufflage');
        $vrac=$request->input('vrac');

       $firstpetbouteille=$depotProduction->petbouteille;
       $firstpetpreform=$depotProduction->petpreform;
       $firstpphomo=$depotProduction->pphomo;
       $firstppcopo=$depotProduction->ppcopo;
       $firstpehdcasier=$depotProduction->pehdcasier;
       $firstpehdsoufflage=$depotProduction->pehdsoufflage;
       $firstdepot=$depotProduction->vrac;

        $firstotal = $firstpetbouteille+$firstpetpreform+$firstpphomo+$firstppcopo+$firstpehdcasier+$firstpehdsoufflage;

        $totalnew=$ppcopo+$pphomo+$petbouteille+$petpreform+$pehdcasier+$pehdsoufflage+$vrac;
         $depotProduction->update($input);

        return redirect()->route('depotProductions.index')
                        ->with('success','Stock updated successfully');
    }
}
