<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Lavagehor;
use DB;
use App\Broyage;

class LavageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Lavagehor::orderBy('id', 'DESC')->paginate(10);
        return view('lavageshors.index', compact('data'))
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
        $lavagehor = Lavagehor::find($id);
        return view('lavageshors.edit', compact('lavagehor'));
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
            'effectiflav' => 'required', 
        ]);

        $input = $request->all();
        $lavagehor=Lavagehor::find($id);
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
        $dechelavage=$request->input('dechelavage');
        $lavagess=$lavagehor->lavagehor;
        $totale=$pehdlav+$ppcopolav+$pphomolav+$petlav;
        $totaleetdechet=$totale+$dechelavage;
        // dd($lavagess);
        $date=$request->input('date');
       // dd($ppcopoblanc);

        if ($lavagess<=0) {
            return redirect()->route('lavageshors.index',compact('lavagehor'))->withFail('La matiere a ete laver ou bien la quantite est inferieur ou egale à ZERO ');
        }
       // dd($totaleetdechet);

       if ($lavagess==$totaleetdechet) {
        $lavagehor->totale=$totale;
        //dd($totaleetdechet);
        $lavagehor->lavagehor=$lavagess-$totaleetdechet;
        $lavagehor->update($input);
  
        $broyage = Broyage::all();
       
         DB::table('broyages')->insert([
       // dd($broyage),
      // dd('cool 1'),

             'broyage'=>$totale,
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
             'ppcopobro'=>$ppcopolav,
 
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
             'pphomobro'=>$pphomolav,
         
             'petbleu'=>$petbleu,
             'petblanc'=>$petblanc,
             'petbro'=>$petlav,
 
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
             'pehdbro'=>$pehdlav,
         
             'totale'=>0,
             'effectifbro'=>0,
             'heuremachine'=>0,

             'dechebroyage'=>0,
             'date'=>$date,
                    
                     ]);

                     //dd('cool');
        return redirect()->route('lavageshors.index',compact('broyage'))->withFail('BRAVO, Le lavage hors circuits de la matiere Id (numero '.$lavagehor->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de broyage .');
       }
       
        return redirect()->route('lavageshors.edit',compact('lavagehor'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
