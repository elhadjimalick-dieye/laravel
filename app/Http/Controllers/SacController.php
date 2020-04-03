<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Stockproduitfini;
use App\Extrusion;
use App\Ventes;
use App\Sac;

use DB;

class SacController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Sac::orderBy('id', 'DESC')->paginate(10);
        return view('sacs.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Sac::orderBy('id', 'DESC')->paginate(10);
        return view('sacs.create', compact('data'))
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
        $sac = Sac::find($id);

        return view('sacs.edit', compact('sac'));
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
            'effectifsac' => 'required',
        ]);

        $input = $request->all();
        $sac = Sac::find($id);
      
        $ppcopobleu=$request->input('ppcopobleu');
        $ppcoposacbleu=$ppcopobleu/25;
        $ppcopobleur=$ppcopobleu%25;
        // dd($ppcopobleu);
        $ppcopoblanc=$request->input('ppcopoblanc');
        $ppcoposacblanc=$ppcopoblanc/25;
        $ppcopoblancr=$ppcopoblanc%25;

        $ppcopojaune=$request->input('ppcopojaune');
        $ppcoposacjaune=$ppcopojaune/25;
        $ppcopojauner=$ppcopojaune%25;

        $ppcopovert=$request->input('ppcopovert');
        $ppcoposacvert=$ppcopovert/25;
        $ppcopovertr=$ppcopovert%25;

        $ppcopomauve=$request->input('ppcopomauve');
        $ppcoposacmauve=$ppcopomauve/25;
        $ppcopomauver=$ppcopomauve%25;

        $ppcoporouge=$request->input('ppcoporouge');
        $ppcoposacrouge=$ppcoporouge/25;
        $ppcoporouger=$ppcoporouge%25;

        $ppcopojadida=$request->input('ppcopojadida');
        $ppcoposacjadida=$ppcopojadida/25;
        $ppcopojadidar=$ppcopojadida%25;

        $ppcopomaron=$request->input('ppcopomaron');
        $ppcoposacmaron=$ppcopomaron/25;
        $ppcopomaronr=$ppcopomaron%25;

        $ppcoponoire=$request->input('ppcoponoire');
        $ppcoposacnoire=$ppcoponoire/25;
        $ppcoponoirer=$ppcoponoire%25;

        $ppcopomulti=$request->input('ppcopomulti');
        $ppcoposacmulti=$ppcopomulti/25;
        $ppcopomultir=$ppcopomulti%25;
        //total
        $ppcopo=$ppcopobleu+$ppcopoblanc+$ppcopojaune+$ppcopovert+$ppcopomauve+$ppcoporouge+$ppcopojadida+$ppcopomaron+$ppcoponoire+$ppcopomulti;
        $ppcoposac=$ppcoposacbleu+$ppcoposacblanc+$ppcoposacjaune+$ppcoposacvert+$ppcoposacmauve+$ppcoposacrouge+$ppcoposacjadida+$ppcoposacmaron+$ppcoposacnoire+$ppcoposacmulti;
        $ppcopor=$ppcopobleur+$ppcopoblancr+$ppcopojauner+$ppcopovertr+$ppcopomauver+$ppcoporouger+$ppcopojadidar+$ppcopomaronr+$ppcoponoirer+$ppcopomultir;
      

        $pphomobleu=$request->input('pphomobleu');
        $pphomosacbleu=$pphomobleu/25;
        $pphomobleur=$pphomobleu%25;

        $pphomoblanc=$request->input('pphomoblanc');
        $pphomosacblanc=$pphomoblanc/25;
        $pphomoblancr=$pphomoblanc%25;

        $pphomojaune=$request->input('pphomojaune');
        $pphomosacjaune=$pphomojaune/25;
        $pphomojauner=$pphomojaune%25;

        $pphomovert=$request->input('pphomovert');
        $pphomosacvert=$pphomovert/25;
        $pphomovertr=$pphomovert%25;

        $pphomomauve=$request->input('pphomomauve');
        $pphomosacmauve=$pphomomauve/25;
        $pphomomauver=$pphomomauve%25;

        $pphomorouge=$request->input('pphomorouge');
        $pphomosacrouge=$pphomorouge/25;
        $pphomorouger=$pphomorouge%25;

        $pphomojadida=$request->input('pphomojadida');
        $pphomosacjadida=$pphomojadida/25;
        $pphomojadidar=$pphomojadida%25;
        
        $pphomomaron=$request->input('pphomomaron');
        $pphomosacmaron=$pphomomaron/25;
        $pphomomaronr=$pphomomaron%25;

        $pphomonoire=$request->input('pphomonoire');
        $pphomosacnoire=$pphomonoire/25;
        $pphomonoirer=$pphomonoire%25;
        
        $pphomomulti=$request->input('pphomomulti');
        $pphomosacmulti=$pphomomulti/25;
        $pphomomultir=$pphomomulti%25;

        $effectifsac=$request->input('effectifsac');
        
        //total
        $pphomo=$pphomobleu+$pphomoblanc+$pphomojaune+$pphomovert+$pphomomauve+$pphomorouge+$pphomojadida+$pphomomaron+$pphomonoire+$pphomomulti;
        $pphomosac=$pphomosacbleu+$pphomosacblanc+$pphomosacjaune+$pphomosacvert+$pphomosacmauve+$pphomosacrouge+$pphomosacjadida+$pphomosacmaron+$pphomosacnoire+$pphomosacmulti;
        $pphomor=$pphomobleur+$pphomoblancr+$pphomojauner+$pphomovertr+$pphomomauver+$pphomorouger+$pphomojadidar+$pphomomaronr+$pphomonoirer+$pphomomultir;

        $petpreformbleu=$request->input('petpreformbleu');
        $petpreformsacbleu=$petpreformbleu/25;
        $petpreformbleur=$petpreformbleu%25;
        //dd($petpreformbleu);
        $petpreformblanc=$request->input('petpreformblanc');
        $petpreformsacblanc=$petpreformblanc/25;
        $petpreformblancr=$petpreformblanc%25;
        //total
        $petpreform=$petpreformblanc+$petpreformbleu;
        $petpreformsac=$petpreformsacblanc+$petpreformsacbleu;
        $petpreformr=$petpreformblancr+$petpreformbleur;

        $petbouteillebleu=$request->input('petbouteillebleu');
        $petbouteillesacbleu=$petbouteillebleu/25;
        $petbouteillebleur=$petbouteillebleu%25;

        $petbouteilleblanc=$request->input('petbouteilleblanc');
        $petbouteillesacblanc=$petbouteilleblanc/25;
        $petbouteilleblancr=$petbouteilleblanc%25;
        //total
        $petbouteille=$petbouteilleblanc+$petbouteillebleu;
        $petbouteillesac=$petbouteillesacblanc+$petbouteillesacbleu;
        $petbouteiller=$petbouteilleblancr+$petbouteillebleur;

        //pehd
        $pehdcasierbleu=$request->input('pehdcasierbleu');
        $pehdcasiersacbleu=$pehdcasierbleu/25;
        $pehdcasierbleur=$pehdcasierbleu%25;

        $pehdcasierblanc=$request->input('pehdcasierblanc');
        $pehdcasiersacblanc=$pehdcasierblanc/25;
        $pehdcasierblancr=$pehdcasierblanc%25;

        $pehdcasierjaune=$request->input('pehdcasierjaune');
        $pehdcasiersacjaune=$pehdcasierjaune/25;
        $pehdcasierjauner=$pehdcasierjaune%25;

        $pehdcasiervert=$request->input('pehdcasiervert');
        $pehdcasiersacvert=$pehdcasiervert/25;
        $pehdcasiervertr=$pehdcasiervert%25;

        $pehdcasierneutre=$request->input('pehdcasierneutre');
        $pehdcasiersacneutre=$pehdcasierneutre/25;
        $pehdcasierneutrer=$pehdcasierneutre%25;

        $pehdcasierrouge=$request->input('pehdcasierrouge');
        $pehdcasiersacrouge=$pehdcasierrouge/25;
        $pehdcasierrouger=$pehdcasierrouge%25;

        $pehdcasierjadida=$request->input('pehdcasierjadida');
        $pehdcasiersacjadida=$pehdcasierjadida/25;
        $pehdcasierjadidar=$pehdcasierjadida%25;

        $pehdcasiermaron=$request->input('pehdcasiermaron');
        $pehdcasiersacmaron=$pehdcasiermaron/25;
        $pehdcasiermaronr=$pehdcasiermaron%25;

        $pehdcasiernoire=$request->input('pehdcasiernoire');
        $pehdcasiersacnoire=$pehdcasiernoire/25;
        $pehdcasiernoirer=$pehdcasiernoire%25;

        $pehdcasiermulti=$request->input('pehdcasiermulti');
        $pehdcasiersacmulti=$pehdcasiermulti/25;
        $pehdcasiermultir=$pehdcasiermulti%25;
        //total
        $pehdcasier=$pehdcasierbleu+$pehdcasierblanc+$pehdcasierjaune+$pehdcasiervert+$pehdcasierneutre+$pehdcasierrouge+$pehdcasierjadida+$pehdcasiermaron+$pehdcasiernoire+$pehdcasiermulti;
        $pehdcasiersac=$pehdcasiersacbleu+$pehdcasiersacblanc+$pehdcasiersacjaune+$pehdcasiersacvert+$pehdcasiersacneutre+$pehdcasiersacrouge+$pehdcasiersacjadida+$pehdcasiersacmaron+$pehdcasiersacnoire+$pehdcasiersacmulti;
        $pehdcasierr=$pehdcasierbleur+$pehdcasierblancr+$pehdcasierjauner+$pehdcasiervertr+$pehdcasierneutrer+$pehdcasierrouger+$pehdcasierjadidar+$pehdcasiermaronr+$pehdcasiernoirer+$pehdcasiermultir;

        //pehd
        $pehdsouflagebleu=$request->input('pehdsouflagebleu');
        $pehdsouflagesacbleu=$pehdsouflagebleu/25;
        $pehdsouflagebleur=$pehdsouflagebleu%25;

        $pehdsouflageblanc=$request->input('pehdsouflageblanc');
        $pehdsouflagesacblanc=$pehdsouflageblanc/25;
        $pehdsouflageblancr=$pehdsouflageblanc%25;

        $pehdsouflagejaune=$request->input('pehdsouflagejaune');
        $pehdsouflagesacjaune=$pehdsouflagejaune/25;
        $pehdsouflagejauner=$pehdsouflagejaune%25;

        $pehdsouflagevert=$request->input('pehdsouflagevert');
        $pehdsouflagesacvert=$pehdsouflagevert/25;
        $pehdsouflagevertr=$pehdsouflagevert%25;

        $pehdsouflageneutre=$request->input('pehdsouflageneutre');
        $pehdsouflagesacneutre=$pehdsouflageneutre/25;
        $pehdsouflageneutrer=$pehdsouflageneutre%25;

        $pehdsouflagerouge=$request->input('pehdsouflagerouge');
        $pehdsouflagesacrouge=$pehdsouflagerouge/25;
        $pehdsouflagerouger=$pehdsouflagerouge%25;

        $pehdsouflagejadida=$request->input('pehdsouflagejadida');
        $pehdsouflagesacjadida=$pehdsouflagejadida/25;
        $pehdsouflagejadidar=$pehdsouflagejadida%25;

        $pehdsouflagemaron=$request->input('pehdsouflagemaron');
        $pehdsouflagesacmaron=$pehdsouflagemaron/25;
        $pehdsouflagemaronr=$pehdsouflagemaron%25;

        $pehdsouflagenoire=$request->input('pehdsouflagenoire');
        $pehdsouflagesacnoire=$pehdsouflagenoire/25;
        $pehdsouflagenoirer=$pehdsouflagenoire%25;

        $pehdsouflagemulti=$request->input('pehdsouflagemulti');
        $pehdsouflagesacmulti=$pehdsouflagemulti/25;
        $pehdsouflagemultir=$pehdsouflagemulti%25;
        //total
        $pehdsouflage=$pehdsouflagebleu+$pehdsouflageblanc+$pehdsouflagejaune+$pehdsouflagevert+$pehdsouflageneutre+$pehdsouflagerouge+$pehdsouflagejadida+$pehdsouflagemaron+$pehdsouflagenoire+$pehdsouflagemulti;
        $pehdsouflagesac=$pehdsouflagesacbleu+$pehdsouflagesacblanc+$pehdsouflagesacjaune+$pehdsouflagesacvert+$pehdsouflagesacneutre+$pehdsouflagesacrouge+$pehdsouflagesacjadida+$pehdsouflagesacmaron+$pehdsouflagesacnoire+$pehdsouflagesacmulti;
        $pehdsouflager=$pehdsouflagebleur+$pehdsouflageblancr+$pehdsouflagejauner+$pehdsouflagevertr+$pehdsouflageneutrer+$pehdsouflagerouger+$pehdsouflagejadidar+$pehdsouflagemaronr+$pehdsouflagenoirer+$pehdsouflagemultir;
        $dechesac=$request->input('dechesac');
        $sacss=$sac->sac;
        //total des champs avant mise en sac
        $totale=$pehdsouflage+$pehdcasier+$ppcopo+$pphomo+$petpreform+$petbouteille;
       
        //total de la matiere restante apres la mise en sac
        //dd($pehdsouflage,$pehdcasier,$ppcopo,$pphomo,$petpreform,$petbouteille);
        $totaler=$pehdcasierr+$ppcopor+$pphomor+$petpreformr+$petbouteiller;

        $resultat=($totale-$totaler)/25;
        //total de la matiere mise en sac

        $nombre=$pehdcasiersac+$ppcoposac+$pphomosac+$petbouteillesac+$petpreformsac;
       // dd($nombre);

        $granule=$pehdcasier+$ppcopo+$pphomo+$petpreform+$petbouteille;
       // dd($granule);
        $extrude=$pehdsouflage;
        //dd($pehdsouflage);

        $totaleetdechet=$totale+$dechesac;
      //  dd($totaleetdechet);
        $restant=$sacss-$totale;
      

        $date=$request->input('date');

        if ($sacss<25) {
            return redirect()->route('sacs.index', compact('sac'))->withFail('La matiere a ete mise en sac ou la quantite est inferieur ou egale à 25 kg ');
        }
       // dd($sacss);
        if ($sacss==$totaleetdechet) {
            
            $sac->ppcopo=$ppcopo;
            $sac->ppcopobleu=$ppcopobleu;
            $sac->ppcopoblanc=$ppcopoblanc;
            $sac->ppcopojaune=$ppcopojaune;
            $sac->ppcopovert=$ppcopovert;
            $sac->ppcopomauve=$ppcopomauve;
            $sac->ppcoporouge=$ppcoporouge;
            $sac->ppcopojadida=$ppcopojadida;
            $sac->ppcopomaron=$ppcopomaron;
            $sac->ppcoponoire=$ppcoponoire;
            $sac->ppcopomulti=$ppcopomulti;

            $sac->pphomobleu=$pphomobleu;
            $sac->pphomoblanc=$pphomoblanc;
            $sac->pphomojaune=$pphomojaune;
            $sac->pphomovert=$pphomovert;
            $sac->pphomomauve=$pphomomauve;
            $sac->pphomorouge=$pphomorouge;
            $sac->pphomojadida=$pphomojadida;
            $sac->pphomomaron=$pphomomaron;
            $sac->pphomonoire=$pphomonoire;
            $sac->pphomomulti=$pphomomulti;
            $sac->pphomo=$pphomo;

            $sac->petpreform=$petpreform;
            $sac->petpreformbleu=$petpreformbleu;
            $sac->petpreformblanc=$petpreformblanc;

            $sac->petbouteille=$petbouteille;
            $sac->petbouteillebleu=$petbouteillebleu;
            $sac->petbouteilleblanc=$petbouteilleblanc;

            $sac->pehdcasier=$pehdcasier;
            $sac->pehdcasierbleu=$pehdcasierbleu;
            $sac->pehdcasierblanc=$pehdcasierblanc;
            $sac->pehdcasierjaune=$pehdcasierjaune;
            $sac->pehdcasiervert=$pehdcasiervert;
            $sac->pehdcasierneutre=$pehdcasierneutre;
            $sac->pehdcasierrouge=$pehdcasierrouge;
            $sac->pehdcasierjadida=$pehdcasierjadida;
            $sac->pehdcasiermaron=$pehdcasiermaron;
            $sac->pehdcasiernoire=$pehdcasiernoire;
            $sac->pehdcasiermulti=$pehdcasiermulti;

            $sac->pehdsouflage=$pehdsouflage;
            $sac->pehdsouflagebleu=$pehdsouflagebleu;
            $sac->pehdsouflageblanc=$pehdsouflageblanc;
            $sac->pehdsouflagejaune=$pehdsouflagejaune;
            $sac->pehdsouflagevert=$pehdsouflagevert;
            $sac->pehdsouflageneutre=$pehdsouflageneutre;
            $sac->pehdsouflagerouge=$pehdsouflagerouge;
            $sac->pehdsouflagejadida=$pehdsouflagejadida;
            $sac->pehdsouflagemaron=$pehdsouflagemaron;
            $sac->pehdsouflagenoire=$pehdsouflagenoire;
            $sac->pehdsouflagemulti=$pehdsouflagemulti;

            //restant
            $sac->ppcoporestant=$ppcopor;
            $sac->ppcopobleurestant=$ppcopobleur;
            $sac->ppcopoblancrestant=$ppcopoblancr;
            $sac->ppcopojaunerestant=$ppcopojauner;
            $sac->ppcopovertrestant=$ppcopovertr;
            $sac->ppcopomauverestant=$ppcopomauver;
            $sac->ppcoporougerestant=$ppcoporouger;
            $sac->ppcopojadidarestant=$ppcopojadidar;
            $sac->ppcopomaronrestant=$ppcopomaronr;
            $sac->ppcoponoirerestant=$ppcoponoirer;
            $sac->ppcopomultirestant=$ppcopomultir;

            $sac->pphomobleurestant=$pphomobleur;
            $sac->pphomoblancrestant=$pphomoblancr;
            $sac->pphomojaunerestant=$pphomojauner;
            $sac->pphomovertrestant=$pphomovertr;
            $sac->pphomomauverestant=$pphomomauver;
            $sac->pphomorougerestant=$pphomorouger;
            $sac->pphomojadidarestant=$pphomojadidar;
            $sac->pphomomaronrestant=$pphomomaronr;
            $sac->pphomonoirerestant=$pphomonoirer;
            $sac->pphomomultirestant=$pphomomultir;
            $sac->pphomorestant=$pphomor;

            $sac->petpreformrestant=$petpreformr;
            $sac->petpreformbleurestant=$petpreformbleur;
            $sac->petpreformblancrestant=$petpreformblancr;

            $sac->petbouteillerestant=$petbouteiller;
            $sac->petbouteillebleurestant=$petbouteillebleur;
            $sac->petbouteilleblancrestant=$petbouteilleblancr;

            $sac->pehdcasierrestant=$pehdcasierr;
            $sac->pehdcasierbleurestant=$pehdcasierbleur;
            $sac->pehdcasierblancrestant=$pehdcasierblancr;
            $sac->pehdcasierjaunerestant=$pehdcasierjauner;
            $sac->pehdcasiervertrestant=$pehdcasiervertr;
            $sac->pehdcasierneutrerestant=$pehdcasierneutrer;
            $sac->pehdcasierrougerestant=$pehdcasierrouger;
            $sac->pehdcasierjadidarestant=$pehdcasierjadidar;
            $sac->pehdcasiermaronrestant=$pehdcasiermaronr;
            $sac->pehdcasiernoirerestant=$pehdcasiernoirer;
            $sac->pehdcasiermultirestant=$pehdcasiermultir;

            $sac->pehdsouflagerestant=$pehdsouflager;
            $sac->pehdsouflagebleurestant=$pehdsouflagebleur;
            $sac->pehdsouflageblancrestant=$pehdsouflageblancr;
            $sac->pehdsouflagejaunerestant=$pehdsouflagejauner;
            $sac->pehdsouflagevertrestant=$pehdsouflagevertr;
            $sac->pehdsouflageneutrerestant=$pehdsouflageneutrer;
            $sac->pehdsouflagerougerestant=$pehdsouflagerouger;
            $sac->pehdsouflagejadidarestant=$pehdsouflagejadidar;
            $sac->pehdsouflagemaronrestant=$pehdsouflagemaronr;
            $sac->pehdsouflagenoirerestant=$pehdsouflagenoirer;
            $sac->pehdsouflagemultirestant=$pehdsouflagemultir;
            //restant
            $sac->effectifsac=$effectifsac;
            //dd($totale-$totaler);
            $sac->totale=$totale-$totaler;
            //dd($totale);
            $sac->sac=$totaler;
            $sac->dechesac=$dechesac;
            $sac->date=$date;
         //dd($totale);



        $stockproduitfini= Stockproduitfini::all();
        DB::table('stockproduitfinis')->insert([
       'stockproduitfini'=>$resultat,
       'ppcoposacbleu'=>$ppcoposacbleu,
       'ppcoposacbleu'=>$ppcoposacbleu,
       'ppcoposacblanc'=>$ppcoposacblanc,
       'ppcoposacjaune'=>$ppcoposacjaune,
       'ppcoposacvert'=>$ppcoposacvert,
       'ppcoposacmauve'=>$ppcoposacmauve,
       'ppcoposacrouge'=>$ppcoposacrouge,
       'ppcoposacjadida'=>$ppcoposacjadida,
       'ppcoposacmaron'=>$ppcoposacmaron,
       'ppcoposacnoire'=>$ppcoposacnoire,
       'ppcoposacmulti'=>$ppcoposacmulti,
       'ppcoposac'=>$ppcoposac,

       'pphomosacbleu'=>$pphomosacbleu,
       'pphomosacblanc'=>$pphomosacblanc,
       'pphomosacjaune'=>$pphomosacjaune,
       'pphomosacvert'=>$pphomosacvert,
       'pphomosacmauve'=>$pphomosacmauve,
       'pphomosacrouge'=>$pphomosacrouge,
       'pphomosacjadida'=>$pphomosacjadida,
       'pphomosacmaron'=>$pphomosacmaron,
       'pphomosacnoire'=>$pphomosacnoire,
       'pphomosacmulti'=>$pphomosacmulti,
       'pphomosac'=>$pphomosac,

       'petpreformsac'=>$petpreformsac,
       'petpreformsacbleu'=>$petpreformsacbleu,
       'petpreformsacblanc'=>$petpreformsacblanc,

       'petbouteillesac'=>$petbouteillesac,
       'petbouteillesacbleu'=>$petbouteillesacbleu,
       'petbouteillesacblanc'=>$petbouteillesacblanc,
        
       'pehdcasiersacbleu'=>$pehdcasiersacbleu,
       'pehdcasiersacblanc'=>$pehdcasiersacblanc,
       'pehdcasiersacjaune'=>$pehdcasiersacjaune,
       'pehdcasiersacvert'=>$pehdcasiersacvert,
       'pehdcasiersacneutre'=>$pehdcasiersacneutre,
       'pehdcasiersacrouge'=>$pehdcasiersacrouge,
       'pehdcasiersacjadida'=>$pehdcasiersacjadida,
       'pehdcasiersacmaron'=>$pehdcasiersacmaron,
       'pehdcasiersacnoire'=>$pehdcasiersacnoire,
       'pehdcasiersacmulti'=>$pehdcasiersacmulti,
       'pehdcasiersac'=>$pehdcasiersac,

       'pehdsouflagesacbleu'=>$pehdsouflagesacbleu,
       'pehdsouflagesacblanc'=>$pehdsouflagesacblanc,
       'pehdsouflagesacjaune'=>$pehdsouflagesacjaune,
       'pehdsouflagesacvert'=>$pehdsouflagesacvert,
       'pehdsouflagesacneutre'=>$pehdsouflagesacneutre,
       'pehdsouflagesacrouge'=>$pehdsouflagesacrouge,
       'pehdsouflagesacjadida'=>$pehdsouflagesacjadida,
       'pehdsouflagesacmaron'=>$pehdsouflagesacmaron,
       'pehdsouflagesacnoire'=>$pehdsouflagesacnoire,
       'pehdsouflagesacmulti'=>$pehdsouflagesacmulti,
       'pehdsouflagesac'=>$pehdsouflagesac,
  
       'nombre'=>0,
       'nombredesac'=>0,
       'totaleppcoposac'=>0,
       'totalepphomosac'=>0,
       'totalepetpreformsac'=>0,
       'totalepetbouteillesac'=>0,
       'totalepehdcasiersac'=>0,
       'totalepehdsouflagesac'=>0,

       'extrude'=>$extrude-$pehdsouflager,
       'granule'=>$granule-$ppcopor+$pphomor+$petpreformr+$petbouteiller,
       'totale'=>$totale-$totaler,
       'date'=>$date,
                ]);


            $extrusion= Extrusion::all();
            $lastextrusionrestant=$extrusion->last()->extrusion;
            $lastpehdsouflagebleurestant=$extrusion->last()->pehdsouflagebleurestant;
            $lastpehdsouflageblancrestant=$extrusion->last()->pehdsouflageblancrestant;
            $lastpehdsouflagejaunerestant=$extrusion->last()->pehdsouflagejaunerestant;
            $lastpehdsouflagevertrestant=$extrusion->last()->pehdsouflagevertrestant;
            $lastpehdsouflagevertrestant=$extrusion->last()->pehdsouflagevertrestant;
            $lastpehdsouflageneutrerestant=$extrusion->last()->pehdsouflageneutrerestant;
            $lastpehdsouflagerougerestant=$extrusion->last()->pehdsouflagerougerestant;
            $lastpehdsouflagejadidarestant=$extrusion->last()->pehdsouflagejadidarestant;
            $lastpehdsouflagemaronrestant=$extrusion->last()->pehdsouflagemaronrestant;
            $lastpehdsouflagenoirerestant=$extrusion->last()->pehdsouflagenoirerestant;
            $lastpehdsouflagemultirestant=$extrusion->last()->pehdsouflagemultirestant;
            $lastpehdsouflagesecrestant=$extrusion->last()->pehdsouflagesecrestant;
            $lastpehdsoufalgerestant=$extrusion->last()->pehdsouflagerestant;

            if ($lastpehdsouflagemultirestant>25 && $lastpehdsouflagebleurestant>25 && $lastpehdsouflageblancrestant>25 && $lastpehdsouflagejaunerestant>25 && $lastpehdsouflagevertrestant>25 && $lastpehdsouflageneutrerestant>25 && $lastpehdsouflagerougerestant>25 && $lastpehdsouflagejadidarestant>25 && $lastpehdsouflagemaronrestant>25 && $lastpehdsouflagenoirerestant>25) {
                return redirect()->route('sacs.index', compact('stockproduitfini','sac'))->withFail('Veillez extruder la quantite qui si trouve dans l\'atelier d\'extrusion avant ce quart');
          }
   
            DB::table('extrusions')->insert([
            'extrusion'=>$extrude+$lastextrusionrestant,
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
            'pehdsouflage'=>0,
            'decheextrusion'=>0,
            'date'=>$date,
                
                ]);
          
            $sac->update($input);
                   
            return redirect()->route('sacs.index', compact('stockproduitfini','sac'))->withFail('BRAVO, Le sac de la matiere Id (numero '.$sac->id.') a ete effectué avec succes, La quantite en PP et PET sont mises en sac le PEHD en atelier d\'extrusion .');
        }
        return redirect()->route('sacs.edit', compact('sac'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y\'a une difference avec la quantite qui est sur cet QUART. ');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sac = Sac::find($id);

        return view('sacs.show', compact('sac'));
    }
      
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updates(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',
        ]);

        $input = $request->all();
        $sac=sac::find($id);

        //dd($extrude);
  
        $sac->update($input);
                   
        
        
        return redirect()->route('sacs.index', compact('sac'))->withFail('BRAVO, Le sac de la matiere Id (numero '.$sac->id.') a ete effectué avec succes, La quantite en PP et PET sont mises en sac le PEHD en atelier d-extrusion .');
    }
}
