<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Lavage;
use DB;
use App\Tamisage;

class TamisageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Tamisage::orderBy('id', 'DESC')->paginate(10);
        return view('tamisages.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
    }
         /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tamisage = tamisage::find($id);
        return view('tamisages.edit', compact('tamisage'));
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
            'effectiftami' => 'required', 
        ]);

        $input = $request->all();
        $tamisage=Tamisage::find($id);
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
        $ppcopolav=$ppcopobleu+$ppcopoblanc+$ppcopojaune+$ppcopovert+$ppcopomauve+$ppcoporouge+$ppcopojadida+$ppcopomaron+$ppcoponoire+$ppcopomulti;
        //dd($ppcopolav);
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
        $effectiflav=$request->input('effectiflav');
        //total
        $pphomolav=$pphomobleu+$pphomoblanc+$pphomojaune+$pphomovert+$pphomomauve+$pphomorouge+$pphomojadida+$pphomomaron+$pphomonoire+$pphomomulti;

        $petbleu=$request->input('petbleu');
        $petblanc=$request->input('petblanc');
        //total
        $petlav=$petblanc+$petbleu;
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
        $pehdlav=$pehdbleu+$pehdblanc+$pehdjaune+$pehdvert+$pehdneutre+$pehdrouge+$pehdjadida+$pehdmaron+$pehdnoire+$pehdmulti;
        $dechetamisage=$request->input('dechetamisage');
        $tamisagess=$tamisage->tamisage;
        $totale=$pehdlav+$ppcopolav+$pphomolav+$petlav;
        $totaleetdechet=$totale+$dechetamisage;
        // dd($tamisagess);
        $date=$request->input('date');
       // dd($ppcopoblanc);

        if ($tamisagess<=0) {
            return redirect()->route('tamisages.index',compact('tamisage'))->withFail('La matiere a ete tamiser ou bien la quantite est inferieur ou egale à ZERO ');
        }
       // dd($totaleetdechet);

       if ($tamisagess==$totaleetdechet) {
        $tamisage->totale=$totale;
        //dd($totaleetdechet);
        $tamisage->tamisage=$tamisagess-$totaleetdechet;
        $tamisage->update($input);

        $lavage=Lavage::all();
        
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
            'ppcopolav'=>$ppcopolav,

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
            'pphomolav'=>$pphomolav,
        
            'petbleu'=>$petbleu,
            'petblanc'=>$petblanc,
            'petlav'=>$petlav,

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
            'pehdlav'=>$pehdlav,
        
            'totale'=>0,
            'effectiflav'=>0,
            'dechelavage'=>0,
            'date'=>$date,
                   
                    ]);

       

                     //dd('cool');
        return redirect()->route('tamisages.index',compact('tamisage'))->withFail('BRAVO, Le tamisage de la matiere Id (numero '.$tamisage->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de lavage .');
       }
       
        return redirect()->route('tamisages.edit',compact('tamisage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
