<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Sechage;
use App\Extrusion;
use App\Sac;
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

        $petpreformbleu=$request->input('petprefombleu');
        $petpreformblanc=$request->input('petprefomblanc');
        //total
        $petpreformsec=$petpreformblanc+$petpreformbleu;

        $petbouteillebleu=$request->input('petbouteillebleu');
        $petbouteilleblanc=$request->input('petbouteilleblanc');
        //total
        $petbouteillesec=$petbouteilleblanc+$petbouteillebleu;
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
        $pehdcasiersec=$pehdcasierbleu+$pehdcasierblanc+$pehdcasierjaune+$pehdcasiervert+$pehdcasierneutre+$pehdcasierrouge+$pehdcasierjadida+$pehdcasiermaron+$pehdcasiernoire+$pehdcasiermulti;
        //pehd
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
        $pehdsouflagesec=$pehdsouflagebleu+$pehdsouflageblanc+$pehdsouflagejaune+$pehdsouflagevert+$pehdsouflageneutre+$pehdsouflagerouge+$pehdsouflagejadida+$pehdsouflagemaron+$pehdsouflagenoire+$pehdsouflagemulti;
       
        $dechesechage=$request->input('dechesechage');
        $sechagess=$sechage->sechage;
        $totale=$pehdsouflagesec+$pehdcasiersec+$ppcoposec+$pphomosec+$petpreformsec+$petbouteillesec;
        $totaleetdechet=$totale+$dechesechage;
        //dd($totale);
        $date=$request->input('date');

        if ($sechagess<=0) {
            return redirect()->route('sechages.index', compact('sechage'))->withFail('La matiere a ete secher ou bien la quantite est inferieur ou egale à ZERO ');
        }

        if ($sechagess==$totaleetdechet) {
            $sechage->ppcoposec=$ppcoposec;
            $sechage->ppcopobleu=$ppcopobleu;
            $sechage->ppcopoblanc=$ppcopoblanc;
            $sechage->ppcopojaune=$ppcopojaune;
            $sechage->ppcopovert=$ppcopovert;
            $sechage->ppcopomauve=$ppcopomauve;
            $sechage->ppcoporouge=$ppcoporouge;
            $sechage->ppcopojadida=$ppcopojadida;
            $sechage->ppcopomaron=$ppcopomaron;
            $sechage->ppcoponoire=$ppcoponoire;
            $sechage->ppcopomulti=$ppcopomulti;

            $sechage->pphomobleu=$pphomobleu;
            $sechage->pphomoblanc=$pphomoblanc;
            $sechage->pphomojaune=$pphomojaune;
            $sechage->pphomovert=$pphomovert;
            $sechage->pphomomauve=$pphomomauve;
            $sechage->pphomorouge=$pphomorouge;
            $sechage->pphomojadida=$pphomojadida;
            $sechage->pphomomaron=$pphomomaron;
            $sechage->pphomonoire=$pphomonoire;
            $sechage->pphomomulti=$pphomomulti;
            $sechage->pphomosec=$pphomosec;

            $sechage->petprefomsec=$petpreformsec;
            $sechage->petprefombleu=$petpreformbleu;
            $sechage->petprefomblanc=$petpreformblanc;

            $sechage->petbouteillesec=$petbouteillesec;
            $sechage->petbouteillebleu=$petbouteillebleu;
            $sechage->petbouteilleblanc=$petbouteilleblanc;

            $sechage->pehdcasiersec=$pehdcasiersec;
            $sechage->pehdcasierbleu=$pehdcasierbleu;
            $sechage->pehdcasierblanc=$pehdcasierblanc;
            $sechage->pehdcasierjaune=$pehdcasierjaune;
            $sechage->pehdcasiervert=$pehdcasiervert;
            $sechage->pehdcasierneutre=$pehdcasierneutre;
            $sechage->pehdcasierrouge=$pehdcasierrouge;
            $sechage->pehdcasierjadida=$pehdcasierjadida;
            $sechage->pehdcasiermaron=$pehdcasiermaron;
            $sechage->pehdcasiernoire=$pehdcasiernoire;
            $sechage->pehdcasiermulti=$pehdcasiermulti;

            $sechage->pehdsouflagesec=$pehdsouflagesec;
            $sechage->pehdsouflagebleu=$pehdsouflagebleu;
            $sechage->pehdsouflageblanc=$pehdsouflageblanc;
            $sechage->pehdsouflagejaune=$pehdsouflagejaune;
            $sechage->pehdsouflagevert=$pehdsouflagevert;
            $sechage->pehdsouflageneutre=$pehdsouflageneutre;
            $sechage->pehdsouflagerouge=$pehdsouflagerouge;
            $sechage->pehdsouflagejadida=$pehdsouflagejadida;
            $sechage->pehdsouflagemaron=$pehdsouflagemaron;
            $sechage->pehdsouflagenoire=$pehdsouflagenoire;
            $sechage->pehdsouflagemulti=$pehdsouflagemulti;
            $sechage->effectifsec=$effectifsec;
            $sechage->date=$date;
            //dd($totale);
            //dd($dechesechage);
            $sechage->sechage=0;
            $sechage->totale=$totale;
            //fin d'insertion de sechage
            $sechage->update($input);

            $sac=Sac::all();
            $lastsac=$sac->last()->sac;
            $lastppcopobleurestant=$sac->last()->ppcopobleurestant;
            $lastppcopoblancrestant=$sac->last()->ppcopoblancrestant;
            $lastppcopojaunerestant=$sac->last()->ppcopojaunerestant;
            $lastppcopovertrestant=$sac->last()->ppcopovertrestant;
            $lastppcopomauverestant=$sac->last()->ppcopomauverestant;
            $lastppcoporougerestant=$sac->last()->ppcoporougerestant;
            $lastppcopojadidarestant=$sac->last()->ppcopojadidarestant;
            $lastppcopomaronrestant=$sac->last()->ppcopomaronrestant;
            $lastppcoponoirerestant=$sac->last()->ppcoponoirerestant;
            $lastppcopomultirestant=$sac->last()->ppcopomultirestant;
            $lastppcoposecrestant=$sac->last()->ppcoposecrestant;

            $lastpphomobleurestant=$sac->last()->pphomobleurestant;
            $lastpphomoblancrestant=$sac->last()->pphomoblancrestant;
            $lastpphomojaunerestant=$sac->last()->pphomojaunerestant;
            $lastpphomovertrestant=$sac->last()->pphomovertrestant;
            $lastpphomomauverestant=$sac->last()->pphomomauverestant;
            $lastpphomorougerestant=$sac->last()->pphomorougerestant;
            $lastpphomojadidarestant=$sac->last()->pphomojadidarestant;
            $lastpphomomaronrestant=$sac->last()->pphomomaronrestant;
            $lastpphomonoirerestant=$sac->last()->pphomonoirerestant;
            $lastpphomomultirestant=$sac->last()->pphomomultirestant;
            $lastpphomosecrestant=$sac->last()->pphomosecrestant;
                
            $lastpetpreformbleurestant=$sac->last()->petpreformbleurestant;
            $lastpetpreformblancrestant=$sac->last()->petpreformblancrestant;
            $lastpetpreformsecrestant=$sac->last()->petpreformsecrestant;

            $lastpetbouteillebleurestant=$sac->last()->petbouteillebleurestant;
            $lastpetbouteilleblancrestant=$sac->last()->petbouteilleblancrestant;
            $lastpetbouteillesecrestant=$sac->last()->petbouteillesecrestant;
        
            $lastpehdcasierbleurestant=$sac->last()->pehdcasierbleurestant;
            $lastpehdcasierblancrestant=$sac->last()->pehdcasierblancrestant;
            $lastpehdcasierjaunerestant=$sac->last()->pehdcasierjaunerestant;
            $lastpehdcasiervertrestant=$sac->last()->pehdcasiervertrestant;
            $lastpehdcasierneutrerestant=$sac->last()->pehdcasierneutrerestant;
            $lastpehdcasierrougerestant=$sac->last()->pehdcasierrougerestant;
            $lastpehdcasierjadidarestant=$sac->last()->pehdcasierjadidarestant;
            $lastpehdcasiermaronrestant=$sac->last()->pehdcasiermaronrestant;
            $lastpehdcasiernoirerestant=$sac->last()->pehdcasiernoirerestant;
            $lastpehdcasiermultirestant=$sac->last()->pehdcasiermultirestant;
            $lastpehdcasiersecrestant=$sac->last()->pehdcasiersecrestant;

            $lastpehdsouflagebleurestant=$sac->last()->pehdsouflagebleurestant;
            $lastpehdsouflageblancrestant=$sac->last()->pehdsouflageblancrestant;
            $lastpehdsouflagejaunerestant=$sac->last()->pehdsouflagejaunerestant;
            $lastpehdsouflagevertrestant=$sac->last()->pehdsouflagevertrestant;
            $lastpehdsouflageneutrerestant=$sac->last()->pehdsouflageneutrerestant;
            $lastpehdsouflagerougerestant=$sac->last()->pehdsouflagerougerestant;
            $lastpehdsouflagejadidarestant=$sac->last()->pehdsouflagejadidarestant;
            $lastpehdsouflagemaronrestant=$sac->last()->pehdsouflagemaronrestant;
            $lastpehdsouflagenoirerestant=$sac->last()->pehdsouflagenoirerestant;
            $lastpehdsouflagemultirestant=$sac->last()->pehdsouflagemultirestant;
            $lastpehdsouflagesecrestant=$sac->last()->pehdsouflagesecrestant;
                    
                       
            DB::table('sacs')->insert([
            'sac'=>$lastsac+$totale,
            'ppcopobleu'=>$ppcopobleu+$lastppcopobleurestant,
            'ppcopoblanc'=>$ppcopoblanc+$lastppcopoblancrestant,
            'ppcopojaune'=>$ppcopojaune+$lastppcopojaunerestant,
            'ppcopovert'=>$ppcopovert+$lastppcopovertrestant,
            'ppcopomauve'=>$ppcopomauve+$lastppcopomauverestant,
            'ppcoporouge'=>$ppcoporouge+$lastppcoporougerestant,
            'ppcopojadida'=>$ppcopojadida+$lastppcopojadidarestant,
            'ppcopomaron'=>$ppcopomaron+$lastppcopomaronrestant,
            'ppcoponoire'=>$ppcoponoire+$lastppcoponoirerestant,
            'ppcopomulti'=>$ppcopomulti+$lastppcopomultirestant,
            'ppcopo'=>$ppcoposec+$lastppcoposecrestant,

            'pphomobleu'=>$pphomobleu+$lastpphomobleurestant,
            'pphomoblanc'=>$pphomoblanc+$lastpphomoblancrestant,
            'pphomojaune'=>$pphomojaune+$lastpphomojaunerestant,
            'pphomovert'=>$pphomovert+$lastpphomovertrestant,
            'pphomomauve'=>$pphomomauve+$lastpphomomauverestant,
            'pphomorouge'=>$pphomorouge+$lastpphomorougerestant,
            'pphomojadida'=>$pphomojadida+$lastpphomojadidarestant,
            'pphomomaron'=>$pphomomaron+$lastpphomomaronrestant,
            'pphomonoire'=>$pphomonoire+$lastpphomonoirerestant,
            'pphomomulti'=>$pphomomulti+$lastpphomomultirestant,
            'pphomo'=>$pphomosec+$lastpphomosecrestant,
        
            'petpreformbleu'=>$petpreformbleu+$lastpetpreformbleurestant,
            'petpreformblanc'=>$petpreformblanc+$lastpetpreformblancrestant,
            'petpreform'=>$petpreformsec+$lastpetpreformsecrestant,

            'petbouteillebleu'=>$petbouteillebleu+$lastpetbouteillebleurestant,
            'petbouteilleblanc'=>$petbouteilleblanc+$lastpetbouteilleblancrestant,
            'petbouteille'=>$petbouteillesec+$lastpetbouteillesecrestant,

            'pehdcasierbleu'=>$pehdcasierbleu+$lastpehdcasierbleurestant,
            'pehdcasierblanc'=>$pehdcasierblanc+$lastpehdcasierblancrestant,
            'pehdcasierjaune'=>$pehdcasierjaune+$lastpehdcasierjaunerestant,
            'pehdcasiervert'=>$pehdcasiervert+$lastpehdcasiervertrestant,
            'pehdcasierneutre'=>$pehdcasierneutre+$lastpehdcasierneutrerestant,
            'pehdcasierrouge'=>$pehdcasierrouge+$lastpehdcasierrougerestant,
            'pehdcasierjadida'=>$pehdcasierjadida+$lastpehdcasierjadidarestant,
            'pehdcasiermaron'=>$pehdcasiermaron+$lastpehdcasiermaronrestant,
            'pehdcasiernoire'=>$pehdcasiernoire+$lastpehdcasiernoirerestant,
            'pehdcasiermulti'=>$pehdcasiermulti+$lastpehdcasiermultirestant,
            'pehdcasier'=>$pehdcasiersec+$lastpehdcasiersecrestant,

            'pehdsouflagebleu'=>$pehdsouflagebleu+$lastpehdsouflagebleurestant,
            'pehdsouflageblanc'=>$pehdsouflageblanc+$lastpehdsouflageblancrestant,
            'pehdsouflagejaune'=>$pehdsouflagejaune+$lastpehdsouflagejaunerestant,
            'pehdsouflagevert'=>$pehdsouflagevert+$lastpehdsouflagevertrestant,
            'pehdsouflageneutre'=>$pehdsouflageneutre+$lastpehdsouflageneutrerestant,
            'pehdsouflagerouge'=>$pehdsouflagerouge+$lastpehdsouflagerougerestant,
            'pehdsouflagejadida'=>$pehdsouflagejadida+$lastpehdsouflagejadidarestant,
            'pehdsouflagemaron'=>$pehdsouflagemaron+$lastpehdsouflagemaronrestant,
            'pehdsouflagenoire'=>$pehdsouflagenoire+$lastpehdsouflagenoirerestant,
            'pehdsouflagemulti'=>$pehdsouflagemulti+$lastpehdsouflagemultirestant,
            'pehdsouflage'=>$pehdsouflagesec+$lastpehdsouflagesecrestant,
            'totale'=>0,
            'dechesac'=>0,
            'date'=>$date,
                               
                                ]);

            return redirect()->route('sechages.index', compact('sac'))->withFail('BRAVO, Le sechage de la matiere Id (numero '.$sechage->id.') a ete effectué avec succes, La quantite en PP et PET sont mises en sac le PEHD en atelier d-extrusion .');
        }
       
        return redirect()->route('sechages.edit', compact('sechage'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
}
