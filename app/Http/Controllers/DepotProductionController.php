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

        //teste de confirmation pour la quantite a sortir
       $testevrac=$depotProduction->last()->vrac;
       $testepp=$depotProduction->last()->ppcopo+$depotProduction->last()->pphomo;
       $testepet=$depotProduction->last()->petpreform+$depotProduction->last()->petbouteille;
       $testepehd=$depotProduction->last()->pehdsoufflage+$depotProduction->last()->pehdcasier;
       
       $testetotal=$testevrac+$testepp+$testepet+$testepehd;
        //sortant pour le teste
       $pehdsortant=$pehdsoufflageSortantpro+$pehdcasierSortantpro;
       $petsortant=$petpreformSortantpro+$petbouteilleSortantpro;
       $ppsortant=$pphomoSortantepro+$ppcopoSortantepro;
       $totalsortatnt=$vracSortant+$ppsortant+$petsortant+$pehdsortant;
        //dd($totalsortatnt);

        if ($testetotal>0 && $testetotal>=$totalsortatnt && $testevrac>=$vracSortant && $depotProduction->last()->ppcopo>=$ppcopoSortantepro && $depotProduction->last()->pphomo>=$pphomoSortantepro && $depotProduction->last()->petpreform>=$petpreformSortantpro && $depotProduction->last()->petbouteille>=$petbouteilleSortantpro && $depotProduction->last()->pehdsoufflage>=$pehdsoufflageSortantpro && $depotProduction->last()->pehdcasier>=$pehdcasierSortantpro ) {
        DB::table('depot_productions')->insert([
            'vracinitiale'=>$vracinitiale=$depotProduction->last()->vrac,
            'vracEntrant'=>$vracEntrant,
            'vracSortant'=>$vracSortant,
            'vrac'=>$vrac=$vracinitiale-$vracSortant,
     
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
        $vracSortant;
        $pp=$ppcopoSortantepro+$pphomoSortantepro;
        $pet=$petbouteilleSortantpro+$petpreformSortantpro;
        $pehd=$pehdcasierSortantpro+$pehdsoufflageSortantpro;
        $premierequantite=$vracSortant+$pp+$pet+$pehd;


        DB::table('triages')->insert([
                    'premierequantite'=>$premierequantite,
                    'ppcopotri'=>0,
                    'ppcopobleu'=>0,
                    'ppcopoblanc'=>0,
                    'ppcopojaune'=>0,
                    'ppcopovert'=>0,
                    'ppcopomauve'=>0,
                    'ppcoporouge'=>0,
                    'ppcopojadida'=>0,
                    'ppcopomaron'=>0,
                    'ppcoponoire'=>0,
                    'ppcopomulti'=>0,

                    'pphomotri'=>0,
                    'pphomobleu'=>0,
                    'pphomoblanc'=>0,
                    'pphomojaune'=>0,
                    'pphomovert'=>0,
                    'pphomomauve'=>0,
                    'pphomorouge'=>0,
                    'pphomojadida'=>0,
                    'pphomomaron'=>0,
                    'pphomonoire'=>0,
                    'pphomomulti'=>0,

                    'pettri'=>0,
                    'petbleu'=>0,
                    'petblanc'=>0,
            
            
                    'pehdtri'=>0,
                    'pehdbleu'=>0,
                    'pehdblanc'=>0,
                    'pehdjaune'=>0,
                    'pehdvert'=>0,
                    'pehdneutre'=>0,
                    'pehdrouge'=>0,
                    'pehdjadida'=>0,
                    'pehdmaron'=>0,
                    'pehdnoire'=>0,
                    'pehdmulti'=>0,
                    
                    'totale'=>0,
                    'dechetriage'=>0,
                    'date'=>$date,
                   
                    ]);

                    return redirect()->route('depotProductions.index',compact('depotProduction','triage'))->withFail('BRAVO, La sortie de la matiere a ete effectuée avec succes');

                }   

        return redirect()->route('depotProductions.create',compact('depotProduction'))->withFail('Impossible la quantite demander est indisponible, Veillez verifier votre stock ');

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
        return view('depotProductions.show', compact('depotProduction'));
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
        return view('depotProductions.edit', compact('depotProduction'));
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
                        ->with('success', 'Stock updated successfully');
    }
}
