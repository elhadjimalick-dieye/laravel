<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Triage;
use DB;
use App\Lavage;

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

        $petbleu=$request->input('petbleu');
        $petblanc=$request->input('petblanc');
        //total
        $pettri=$petblanc+$petbleu;
        //pehd
        $pehdbleu=$request->input('pehdbleu');
        $pehdblanc=$request->input('pehdblanc');
        $pehdjaune=$request->input('pehdjaune');
        $pehdvert=$request->input('pehdvert');
        $pehdneutre=$request->input('pehdneutre');
        $pehdrouge=$request->input('pehdrouge');
        $pehdjadida=$request->input('pehdjadida');
        $pehdmaron=$request->input('pehdmaron');
        $pehdnoire=$request->input('pehdnoire');
        $pehdmulti=$request->input('pehdmulti');
        //total
        $pehdtri=$pehdbleu+$pehdblanc+$pehdjaune+$pehdvert+$pehdneutre+$pehdrouge+$pehdjadida+$pehdmaron+$pehdnoire+$pehdmulti;
        $dechetriage=$request->input('dechetriage');
        $premierequantite=$triage->premierequantite;
        $totale=$pehdtri+$ppcopotri+$pphomotri+$pettri;
        $totaleetdechet=$totale+$dechetriage;
       // dd($totaleetdechet);
        $date=$request->input('date');

        if ($premierequantite<=0) {
            return redirect()->route('triages.index',compact('triage'))->withFail('La matiere a ete trier ou la quantite est inferieur ou egale à ZERO ');
        }

       if ($premierequantite==$totaleetdechet) {
        $triage->totale=$totale;
        $triage->premierequantite=$premierequantite-$totaleetdechet;

      
        $triage->update($input);

        $lavage=Lavage::all();
       
       // dd($premierequantite);
        // dd($pehdsoufflageSortantpro);
        DB::table('lavages')->insert([
            'lavage'=>$totale,
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
        
            'petbleu'=>$petbleu,
            'petblanc'=>$petblanc,
            'petlav'=>$pettri,

            'pehdbleu'=>$pehdbleu,
            'pehdblanc'=>$pehdblanc,
            'pehdjaune'=>$pehdjaune,
            'pehdvert'=>$pehdvert,
            'pehdneutre'=>$pehdneutre,
            'pehdrouge'=>$pehdrouge,
            'pehdjadida'=>$pehdjadida,
            'pehdmaron'=>$pehdmaron,
            'pehdnoire'=>$pehdnoire,
            'pehdmulti'=>$pehdmulti,
            'pehdlav'=>$pehdtri,
        
            'totale'=>0,
            'effectiflav'=>0,
        
            'dechelavage'=>0,
            'date'=>$date,
                   
                    ]);


        return redirect()->route('triages.index',compact('triage'))->withFail('Le tri de la matiere numero (Id '.$triage->id.') a ete effectué avec succes, La matiere se retrouver maitenant dans l-atelier de lavage BRAVO .');
       }
       
        return redirect()->route('triages.edit',compact('triage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Triage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
