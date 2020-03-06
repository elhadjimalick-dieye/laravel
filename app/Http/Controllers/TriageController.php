<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Triage;
use DB;
use App\Lavagehor;

class TriageController extends Controller
{
       
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Triage::orderBy('id', 'DESC')->paginate(10);
        return view('triages.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
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
        return view('triages.show', compact('triage'));
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
        return view('triage.create', compact('triage'));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $triage = Triage::find($id);
        return view('triages.edit', compact('triage'));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',
        ]);

        $input = $request->all();
        $triage=Triage::find($id);
        $ppcopobleu=$request->input('ppcopobleu');
        $ppcopoblanc=$request->input('ppcopoblanc');
        $ppcopojaune=$request->input('ppcopojaune');
        $ppcopovert=$request->input('ppcopovert');
        $ppcopomauve=$request->input('ppcopomauve');
        $ppcoporouge=$request->input('ppcoporouge');
        $ppcopojadida=$request->input('ppcopojadida');
        $ppcopomaron=$request->input('ppcopomaron');
        $ppcoponoire=$request->input('ppcoponoire');
        $ppcopomulti=$request->input('ppcopomulti');
        //total
        $ppcopotri=$ppcopobleu+$ppcopoblanc+$ppcopojaune+$ppcopovert+$ppcopomauve+$ppcoporouge+$ppcopojadida+$ppcopomaron+$ppcoponoire+$ppcopomulti;
        //dd($ppcopotri);
        $pphomobleu=$request->input('pphomobleu');
        $pphomoblanc=$request->input('pphomoblanc');
        $pphomojaune=$request->input('pphomojaune');
        $pphomovert=$request->input('pphomovert');
        $pphomomauve=$request->input('pphomomauve');
        $pphomorouge=$request->input('pphomorouge');
        $pphomojadida=$request->input('pphomojadida');
        $pphomomaron=$request->input('pphomomaron');
        $pphomonoire=$request->input('pphomonoire');
        $pphomomulti=$request->input('pphomomulti');
        $effectiftri=$request->input('effectiftri');
        //total
        $pphomotri=$pphomobleu+$pphomoblanc+$pphomojaune+$pphomovert+$pphomomauve+$pphomorouge+$pphomojadida+$pphomomaron+$pphomonoire+$pphomomulti;
       
        $petpreformbleu=$request->input('petpreformbleu');
        $petpreformblanc=$request->input('petpreformblanc');
        $petpreformtri=$petpreformbleu+$petpreformblanc;

        $petbouteillebleu=$request->input('petbouteillebleu');
        $petbouteilleblanc=$request->input('petbouteilleblanc');
        //total
        $petbouteilletri=$petbouteilleblanc+$petbouteillebleu;
        //pehd
        $pehdcasierbleu=$request->input('pehdcasierbleu');
        $pehdcasierblanc=$request->input('pehdcasierblanc');
        $pehdcasierjaune=$request->input('pehdcasierjaune');
        $pehdcasiervert=$request->input('pehdcasiervert');
        $pehdcasierneutre=$request->input('pehdcasierneutre');
        $pehdcasierrouge=$request->input('pehdcasierrouge');
        $pehdcasierjadida=$request->input('pehdcasierjadida');
        $pehdcasiermaron=$request->input('pehdcasiermaron');
        $pehdcasiernoire=$request->input('pehdcasiernoire');
        $pehdcasiermulti=$request->input('pehdcasiermulti');

        $pehdsouflagebleu=$request->input('pehdsouflagebleu');
        $pehdsouflageblanc=$request->input('pehdsouflageblanc');
        $pehdsouflagejaune=$request->input('pehdsouflagejaune');
        $pehdsouflagevert=$request->input('pehdsouflagevert');
        $pehdsouflageneutre=$request->input('pehdsouflageneutre');
        $pehdsouflagerouge=$request->input('pehdsouflagerouge');
        $pehdsouflagejadida=$request->input('pehdsouflagejadida');
        $pehdsouflagemaron=$request->input('pehdsouflagemaron');
        $pehdsouflagenoire=$request->input('pehdsouflagenoire');
        $pehdsouflagemulti=$request->input('pehdsouflagemulti');
        //total
        $pehdcasiertri=$pehdcasierbleu+$pehdcasierblanc+$pehdcasierjaune+$pehdcasiervert+$pehdcasierneutre+$pehdcasierrouge+$pehdcasierjadida+$pehdcasiermaron+$pehdcasiernoire+$pehdcasiermulti;
        $pehdsouflagetri=$pehdsouflagebleu+$pehdsouflageblanc+$pehdsouflagejaune+$pehdsouflagevert+$pehdsouflageneutre+$pehdsouflagerouge+$pehdsouflagejadida+$pehdsouflagemaron+$pehdsouflagenoire+$pehdsouflagemulti;

        $dechetriage=$request->input('dechetriage');
        $premierequantite=$triage->premierequantite;
        $totale=$pehdcasiertri+$pehdsouflagetri+$ppcopotri+$pphomotri+$petpreformtri+$petbouteilletri;
        $totaleetdechet=$totale+$dechetriage;
       // dd($totaleetdechet);
        $date=$request->input('date');

        if ($premierequantite<=0) {

            return redirect()->route('triages.index',compact('triage'))->withFail('La matiere a ete trier ou la quantite est inferieur ou egale à ZERO ');
        }

       if ($premierequantite==$totaleetdechet) {
        $triage->totale=$totale;
        $triage->pphomotri=$pphomotri;
        $triage->ppcopotri=$ppcopotri;
        $triage->petpreformtri=$petpreformtri;
        $triage->petbouteilletri=$petbouteilletri;
        $triage->pehdsouflagetri=$pehdsouflagetri;
        $triage->pehdcasiertri=$pehdcasiertri;


        $triage->premierequantite=$premierequantite-$totaleetdechet;

      
        $triage->update($input);
        //dd($totaleetdechet);
        $lavagehor=Lavagehor::all();
        //dd($lavagehor);
        DB::table('lavagehors')->insert([
            //dd($totale),
            'lavagehor'=>$totale,
            'ppcopobleu'=>$ppcopobleu,
            'ppcopoblanc'=>$ppcopoblanc,
            'ppcopojaune'=>$ppcopojaune,
            'ppcopovert'=>$ppcopovert,
            'ppcopomauve'=>$ppcopomauve,
            'ppcoporouge'=>$ppcoporouge,
            'ppcopojadida'=>$ppcopojadida,
            'ppcopomaron'=>$ppcopomaron,
            'ppcoponoire'=>$ppcoponoire,
            'ppcopomulti'=>$ppcopomulti,
            'ppcopolav'=>$ppcopotri,

            'pphomobleu'=>$pphomobleu,
            'pphomoblanc'=>$pphomoblanc,
            'pphomojaune'=>$pphomojaune,
            'pphomovert'=>$pphomovert,
            'pphomomauve'=>$pphomomauve,
            'pphomorouge'=>$pphomorouge,
            'pphomojadida'=>$pphomojadida,
            'pphomomaron'=>$pphomomaron,
            'pphomonoire'=>$pphomonoire,
            'pphomomulti'=>$pphomomulti,
            'pphomolav'=>$pphomotri,
        
            'petpreformbleu'=>$petpreformbleu,
            'petpreformblanc'=>$petpreformblanc,
            'petpreformlav'=>$petpreformtri,

            'petbouteillebleu'=>$petbouteillebleu,
            'petbouteilleblanc'=>$petbouteilleblanc,
            'petbouteillelav'=>$petbouteilletri,


            'pehdcasierbleu'=>$pehdcasierbleu,
            'pehdcasierblanc'=>$pehdcasierblanc,
            'pehdcasierjaune'=>$pehdcasierjaune,
            'pehdcasiervert'=>$pehdcasiervert,
            'pehdcasierneutre'=>$pehdcasierneutre,
            'pehdcasierrouge'=>$pehdcasierrouge,
            'pehdcasierjadida'=>$pehdcasierjadida,
            'pehdcasiermaron'=>$pehdcasiermaron,
            'pehdcasiernoire'=>$pehdcasiernoire,
            'pehdcasiermulti'=>$pehdcasiermulti,
            'pehdcasierlav'=>$pehdcasiertri,

            'pehdsouflagebleu'=>$pehdsouflagebleu,
            'pehdsouflageblanc'=>$pehdsouflageblanc,
            'pehdsouflagejaune'=>$pehdsouflagejaune,
            'pehdsouflagevert'=>$pehdsouflagevert,
            'pehdsouflageneutre'=>$pehdsouflageneutre,
            'pehdsouflagerouge'=>$pehdsouflagerouge,
            'pehdsouflagejadida'=>$pehdsouflagejadida,
            'pehdsouflagemaron'=>$pehdsouflagemaron,
            'pehdsouflagenoire'=>$pehdsouflagenoire,
            'pehdsouflagemulti'=>$pehdsouflagemulti,
            'pehdsouflagelav'=>$pehdsouflagetri,
        
            'totale'=>0,
            'dechelavage'=>0,
            'date'=>$date,
                   
                    ]);
                    //dd('tester');

        return redirect()->route('triages.index',compact('lavagehor'))->withFail('Le tri de la matiere numero (Id '.$triage->id.') a ete effectué avec succes, La matiere se trouve maitenant dans l-atelier de lavage BRAVO .');
       }
       
        return redirect()->route('triages.edit',compact('triage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur ce QUART. ');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Triage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
