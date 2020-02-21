<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\broage;
use DB;
use App\Broyage;
use App\Tamisage;

class BroyageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Broyage::orderBy('id', 'DESC')->paginate(10);
        return view('broyages.index', compact('data'))
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
        $broyage = Broyage::find($id);
        return view('broyages.edit', compact('broyage'));
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
            'effectifbro' => 'required', 
        ]);

        $input = $request->all();
        $broyage=Broyage::find($id);
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
        $ppcopobro=$ppcopobleu+$ppcopoblanc+$ppcopojaune+$ppcopovert+$ppcopomauve+$ppcoporouge+$ppcopojadida+$ppcopomaron+$ppcoponoire+$ppcopomulti;
        //dd($ppcopobro);
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
        $effectifbro=$request->input('effectifbro');
        //total
        $pphomobro=$pphomobleu+$pphomoblanc+$pphomojaune+$pphomovert+$pphomomauve+$pphomorouge+$pphomojadida+$pphomomaron+$pphomonoire+$pphomomulti;

        $petbleu=$request->input('petbleu');
        $petblanc=$request->input('petblanc');
        //total
        $petbro=$petblanc+$petbleu;
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
        $pehdbro=$pehdbleu+$pehdblanc+$pehdjaune+$pehdvert+$pehdneutre+$pehdrouge+$pehdjadida+$pehdmaron+$pehdnoire+$pehdmulti;
        $dechebroyage=$request->input('dechebroyage');
        $broyagess=$broyage->broyage;
        $totale=$pehdbro+$ppcopobro+$pphomobro+$petbro;
        $totaleetdechet=$totale+$dechebroyage;
        // dd($broyagess);
        $date=$request->input('date');
      // dd($ppcopobleu);

        if ($broyagess<=0) {
            return redirect()->route('broyages.index',compact('broyage'))->withFail('La matiere a ete broyer ou bien la quantite est inferieur ou egale à ZERO ');
        }
       // dd($totaleetdechet);

       if ($broyagess==$totaleetdechet) {
        $broyage->totale=$totale;
        //dd($totaleetdechet);
        $broyage->broyage=$broyagess-$totaleetdechet;
        $broyage->update($input);
        $tamisage=Tamisage::all();

        DB::table('tamisages')->insert([
            'tamisage'=>$totale,
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
            'ppcopotami'=>$ppcopobro,

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
            'pphomotami'=>$pphomobro,
        
            'petbleu'=>$petbleu,
            'petblanc'=>$petblanc,
            'pettami'=>$petbro,

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
            'pehdtami'=>$pehdbro,
        
            'totale'=>0,
            'effectiftami'=>0,
            'dechetamisage'=>0,
            'date'=>$date,
                   
                    ]);
        return redirect()->route('broyages.index',compact('tamisage'))->withFail('BRAVO, Le broie de la matiere Id (numero '.$broyage->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de Tamisage .');
       }
       
        return redirect()->route('broyages.edit',compact('broyage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
