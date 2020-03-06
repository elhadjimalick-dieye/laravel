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

        $petpreformbleu=$request->input('petpreformbleu');
        $petpreformblanc=$request->input('petpreformblanc');
        //total
        $petpreformlav=$petpreformblanc+$petpreformbleu;
        
        $petbouteillebleu=$request->input('petbouteillebleu');
        $petbouteilleblanc=$request->input('petbouteilleblanc');
        //total
        $petbouteillelav=$petbouteilleblanc+$petbouteillebleu;
        
        
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
        //total
        $pehdcasierlav=$pehdcasierbleu+$pehdcasierblanc+$pehdcasierjaune+$pehdcasiervert+$pehdcasierneutre+$pehdcasierrouge+$pehdcasierjadida+$pehdcasiermaron+$pehdcasiernoire+$pehdcasiermulti;
       
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
       
        $pehdsouflagelav=$pehdsouflagebleu+$pehdsouflageblanc+$pehdsouflagejaune+$pehdsouflagevert+$pehdsouflageneutre+$pehdsouflagerouge+$pehdsouflagejadida+$pehdsouflagemaron+$pehdsouflagenoire+$pehdsouflagemulti;
       

        $dechelavage=$request->input('dechelavage');
        $lavagess=$lavagehor->lavagehor;
        $totale=$pehdsouflagelav+$pehdcasierlav+$ppcopolav+$pphomolav+$petpreformlav+$petbouteillelav;
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
         
             'petpreformbleu'=>$petpreformbleu,
             'petpreformblanc'=>$petpreformblanc,
             'petpreformbro'=>$petpreformlav,

             'petbouteillebleu'=>$petbouteillebleu,
             'petbouteilleblanc'=>$petbouteilleblanc,
             'petbouteillebro'=>$petbouteillelav,
 
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
             'pehdcasierbro'=>$pehdcasierlav,

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
             'pehdsouflagebro'=>$pehdsouflagelav,
         
             'totale'=>0,

             'dechebroyage'=>0,
             'date'=>$date,
                    
                     ]);

                     //dd('cool');
        return redirect()->route('lavageshors.index',compact('broyage'))->withFail('BRAVO, Le lavage hors circuits de la matiere Id (numero '.$lavagehor->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de broyage .');
       }
       
        return redirect()->route('lavageshors.edit',compact('lavagehor'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
