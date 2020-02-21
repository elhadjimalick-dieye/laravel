<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Sechage;
use DB;

class SechageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Sechage::orderBy('id', 'DESC')->paginate(10);
        return view('sechages.index', compact('data'))
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
        $sechage = Sechage::find($id);
        return view('sechages.edit', compact('sechage'));
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
            'effectifsec' => 'required', 
        ]);

        $input = $request->all();
        $sechage=sechage::find($id);
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
        $ppcoposec=$ppcopobleu+$ppcopoblanc+$ppcopojaune+$ppcopovert+$ppcopomauve+$ppcoporouge+$ppcopojadida+$ppcopomaron+$ppcoponoire+$ppcopomulti;
        //dd($ppcoposec);
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
        $effectifsec=$request->input('effectifsec');
        //total
        $pphomosec=$pphomobleu+$pphomoblanc+$pphomojaune+$pphomovert+$pphomomauve+$pphomorouge+$pphomojadida+$pphomomaron+$pphomonoire+$pphomomulti;

        $petbleu=$request->input('petbleu');
        $petblanc=$request->input('petblanc');
        //total
        $petsec=$petblanc+$petbleu;
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
        $pehdsec=$pehdbleu+$pehdblanc+$pehdjaune+$pehdvert+$pehdneutre+$pehdrouge+$pehdjadida+$pehdmaron+$pehdnoire+$pehdmulti;
        $dechesechage=$request->input('dechesechage');
        $sechagess=$sechage->sechage;
        $totale=$pehdsec+$ppcoposec+$pphomosec+$petsec;
        $totaleetdechet=$totale+$dechesechage;
        // dd($sechagess);
        $date=$request->input('date');
       // dd($ppcopoblanc);

        if ($sechagess<=0) {
            return redirect()->route('sechages.index',compact('sechage'))->withFail('La matiere a ete secher ou bien la quantite est inferieur ou egale à ZERO ');
        }
       // dd($totaleetdechet);

       if ($sechagess==$totaleetdechet) {
        $sechage->totale=$totale;
        //dd($totaleetdechet);
        $sechage->sechage=$sechagess-$totaleetdechet;
        $sechage->update($input);
  
                     //dd('cool');
        return redirect()->route('sechages.index',compact('sechage'))->withFail('BRAVO, Le sechage de la matiere Id (numero '.$sechage->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de sechage .');
       }
       
        return redirect()->route('sechages.edit',compact('sechage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
