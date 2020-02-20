<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Triage;
use DB;
use App\Lavage;

class LavageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Lavage::orderBy('id', 'DESC')->paginate(10);
        return view('lavages.index', compact('data'))
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
        $lavage = Lavage::find($id);
        return view('lavages.edit', compact('lavage'));
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
        $lavage=Lavage::find($id);
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
        $lavagess=$lavage->lavage;
        $totale=$pehdlav+$ppcopolav+$pphomolav+$petlav;
        $totaleetdechet=$totale+$dechelavage;
        // dd($lavagess);
        $date=$request->input('date');

        if ($lavagess<=0) {
            return redirect()->route('lavages.index',compact('lavage'))->withFail('La matiere a ete laver ou la quantite est inferieur ou egale à ZERO ');
        }
       // dd($totaleetdechet);

       if ($lavagess==$totaleetdechet) {
        $lavage->totale=$totale;
        //dd($totaleetdechet);
        $lavage->lavage=$lavagess-$totaleetdechet;
        $lavage->update($input);
  
        return redirect()->route('lavages.index',compact('lavage'))->withFail('BRAVO, Le lavage de la matiere Id (numero '.$lavage->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de séchage .');
       }
       
        return redirect()->route('lavages.edit',compact('lavage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
