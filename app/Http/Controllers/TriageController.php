<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Triage;
use DB;
class TriageController extends Controller
{
        /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Triage::orderBy('id', 'DESC')->paginate(5);
        
        $triages = DB::table('triages')->get();

        
        $vractr=$triages->last()->vractr;
        $ppcopotr=$triages->last()->ppcopotr;
        $petbouteilletr=$triages->last()->petbouteilletr;
        $petpreformtr=$triages->last()->petpreformtr;
        $pehdcasiertr=$triages->last()->pehdcasiertr;
        $pehdsoufflagetr=$triages->last()->pehdsoufflagetr;
        $dechettr=$triages->last()->dechettr;

       // $triages=$triages->last()->vractr;

       // dd($triages);

        return view('triages.index', compact(
        'data',
        'vractr',
        'ppcopotr',
        'petbouteilletr',
        'petpreformtr',
        'pehdcasiertr',
        'pehdsoufflagetr',
        'dechettr',
        ))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

          

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $triage = Triage::find($id);
        return view('triages.show',compact('triage'));

    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $triage = Triage::all();
        return view('triages.create',compact('triage'));

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
            $triage=Triage::find($id);
            $vracSortanttr=$request->input('vracSortanttr');
            $ppcopoSortantetr=$request->input('ppcopoSortantetr');
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
    public function massDestroy(MassDestroyUserRequest $request)
    {
        Triage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
