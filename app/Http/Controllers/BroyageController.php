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
            'heuremachine'=>'required',

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

        $petpreformbleu=$request->input('petpreformbleu');
        $petpreformblanc=$request->input('petpreformblanc');
        //total
        $petpreformbro=$petpreformblanc+$petpreformbleu;

        $petbouteillebleu=$request->input('petbouteillebleu');
        $petbouteilleblanc=$request->input('petbouteilleblanc');
        //total
        $petbouteillebro=$petbouteilleblanc+$petbouteillebleu;
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
        $pehdcasierbro=$pehdcasierbleu+$pehdcasierblanc+$pehdcasierjaune+$pehdcasiervert+$pehdcasierneutre+$pehdcasierrouge+$pehdcasierjadida+$pehdcasiermaron+$pehdcasiernoire+$pehdcasiermulti;
        
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
        
        
        $pehdsouflagebro=$pehdsouflagebleu+$pehdsouflageblanc+$pehdsouflagejaune+$pehdsouflagevert+$pehdsouflageneutre+$pehdsouflagerouge+$pehdsouflagejadida+$pehdsouflagemaron+$pehdsouflagenoire+$pehdsouflagemulti;
        
        $dechebroyage=$request->input('dechebroyage');
        $broyagess=$broyage->broyage;
        $totale=$pehdsouflagebro+$pehdcasierbro+$ppcopobro+$pphomobro+$petpreformbro+$petbouteillebro;
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
        
            'petpreformbleu'=>$petpreformbleu,
            'petpreformblanc'=>$petpreformblanc,
            'petpreformtami'=>$petpreformbro,

            'petbouteillebleu'=>$petbouteillebleu,
            'petbouteilleblanc'=>$petbouteilleblanc,
            'petbouteilletami'=>$petbouteillebro,

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
            'pehdsouflagetami'=>$pehdsouflagebro,
        
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
            'pehdcasiertami'=>$pehdcasierbro,
            'totale'=>0,
            'dechetamisage'=>0,
            'date'=>$date,
                   
                    ]);
        return redirect()->route('broyages.index',compact('tamisage'))->withFail('BRAVO, Le broie de la matiere Id (numero '.$broyage->id.') a ete effectué avec succes, La matiere se retrouve maitenant dans l-atelier de Tamisage .');
       }
       
        return redirect()->route('broyages.edit',compact('broyage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
  

}
