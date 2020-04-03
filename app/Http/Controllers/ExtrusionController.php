<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Extrusion;
use App\ventes;
use App\Stockproduitfini;
use DB;

class ExtrusionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Extrusion::orderBy('id', 'DESC')->paginate(10);
        return view('extrusions.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $extrusion = Extrusion::find($id);
        return view('extrusions.edit', compact('extrusion'));
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
            'effectifextru' => 'required',
        ]);

        $input = $request->all();
        $extrusion=Extrusion::find($id);

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
        $decheextrusion=$request->input('decheextrusion');
        $extrusionss=$extrusion->extrusion;

        $totaleetdechet=$pehdsouflage+$decheextrusion;
        // dd($extrusionss);
        $date=$request->input('date');
       
        $resultat=($pehdsouflage-$pehdsouflager)/25;
        // dd($resultat);
        if ($extrusionss<=0 && $pehdsouflagesac<=0) {
            return redirect()->route('extrusions.index', compact('extrusion'))->withFail('La matiere a ete Extruder ou la quantite est inferieur ou egale à 25 kg ');
        }
      
        if ($extrusionss==$totaleetdechet) {
            $extrusion->pehdsouflagebleurestant=$pehdsouflagebleur;
            $extrusion->pehdsouflageblancrestant=$pehdsouflageblancr;
            $extrusion->pehdsouflagejaunerestant=$pehdsouflagejauner;
            $extrusion->pehdsouflagevertrestant=$pehdsouflagevertr;
            $extrusion->pehdsouflagevertrestant=$pehdsouflagevertr;
            $extrusion->pehdsouflageneutrerestant=$pehdsouflageneutrer;
            $extrusion->pehdsouflagerougerestant=$pehdsouflagerouger;
            $extrusion->pehdsouflagejadidarestant=$pehdsouflagejadidar;
            $extrusion->pehdsouflagemaronrestant=$pehdsouflagemaronr;
            $extrusion->pehdsouflagenoirerestant=$pehdsouflagenoirer;
            $extrusion->pehdsouflagemultirestant=$pehdsouflagemultir;
            $extrusion->pehdsouflagerestant=$pehdsouflager;

            $extrusion->extrusion=$extrusionss-$totaleetdechet+$pehdsouflager;
            $extrusion->pehdsouflage=$pehdsouflage-$extrusion->extrusion;
            $extrusion->pehdsouflagebleu=$pehdsouflagebleu;
            $extrusion->pehdsouflageblanc=$pehdsouflageblanc;
            $extrusion->pehdsouflagejaune=$pehdsouflagejaune;
            $extrusion->pehdsouflagevert=$pehdsouflagevert;
            $extrusion->pehdsouflageneutre=$pehdsouflageneutre;
            $extrusion->pehdsouflagerouge=$pehdsouflagerouge;
            $extrusion->pehdsouflagejadida=$pehdsouflagejadida;
            $extrusion->pehdsouflagemaron=$pehdsouflagemaron;
            $extrusion->pehdsouflagenoire=$pehdsouflagenoire;
            $extrusion->pehdsouflagemulti=$pehdsouflagemulti;
       
            $extrusion->pehdsouflagesacbleu=$pehdsouflagesacbleu;
            $extrusion->pehdsouflagesacblanc=$pehdsouflagesacblanc;
            $extrusion->pehdsouflagesacjaune=$pehdsouflagesacjaune;
            $extrusion->pehdsouflagesacvert=$pehdsouflagesacvert;
            $extrusion->pehdsouflagesacneutre=$pehdsouflagesacneutre;
            $extrusion->pehdsouflagesacrouge=$pehdsouflagesacrouge;
            $extrusion->pehdsouflagesacjadida=$pehdsouflagesacjadida;
            $extrusion->pehdsouflagesacmaron=$pehdsouflagesacmaron;
            $extrusion->pehdsouflagesacnoire=$pehdsouflagesacnoire;
            $extrusion->pehdsouflagesacmulti=$pehdsouflagesacmulti;
            $extrusion->pehdsouflagesac=$resultat;

            $extrusion->decheextrusion=$decheextrusion;
            $extrusion->date=$date;

            $stock=Stockproduitfini::find($id);
            $extrude=$stock->extrude;
            $date=$request->input('date');
            //dd($stock);
            $stockproduitfini=$stock->stockproduitfini;
            $ppcoposac=$stock->ppcoposac;
            $ppcoposacbleu=$stock->ppcoposacbleu;
            $ppcoposacblanc=$stock->ppcoposacblanc;
            $ppcoposacjaune=$stock->ppcoposacjaune;
            $ppcoposacvert=$stock->ppcoposacvert;
            $ppcoposacmauve=$stock->ppcoposacmauve;
            $ppcoposacrouge=$stock->ppcoposacrouge;
            $ppcoposacjadida=$stock->ppcoposacjadida;
            $ppcoposacmaron=$stock->ppcoposacmaron;
            $ppcoposacnoire=$stock->ppcoposacnoire;
            $ppcoposacmulti=$stock->ppcoposacmulti;

            $pphomosacbleu=$stock->pphomosacbleu;
            $pphomosacblanc=$stock->pphomosacblanc;
            $pphomosacjaune=$stock->pphomosacjaune;
            $pphomosacvert=$stock->pphomosacvert;
            $pphomosacmauve=$stock->pphomosacmauve;
            $pphomosacrouge=$stock->pphomosacrouge;
            $pphomosacjadida=$stock->pphomosacjadida;
            $pphomosacmaron=$stock->pphomosacmaron;
            $pphomosacnoire=$stock->pphomosacnoire;
            $pphomosacmulti=$stock->pphomosacmulti;
            $pphomosac=$stock->pphomosac;


            $petpreformsac=$stock->petpreformsac;
            $petpreformsacbleu=$stock->petpreformsacbleu;
            $petpreformsacblanc=$stock->petpreformsacblanc;

            $petbouteillesac=$stock->petbouteillesac;
            $petbouteillesacbleu=$stock->petbouteillesacbleu;
            $petbouteillesacblanc=$stock->petbouteillesacblanc;

            $pehdcasiersacbleu=$stock->pehdcasiersacbleu;
            $pehdcasiersacblanc=$stock->pehdcasiersacblanc;
            $pehdcasiersacjaune=$stock->pehdcasiersacjaune;
            $pehdcasiersacvert=$stock->pehdcasiersacvert;
            $pehdcasiersacneutre=$stock->pehdcasiersacneutre;
            $pehdcasiersacrouge=$stock->pehdcasiersacrouge;
            $pehdcasiersacjadida=$stock->pehdcasiersacjadida;
            $pehdcasiersacmaron=$stock->pehdcasiersacmaron;
            $pehdcasiersacnoire=$stock->pehdcasiersacnoire;
            $pehdcasiersacmulti=$stock->pehdcasiersacmulti;
            $pehdcasiersac=$stock->pehdcasiersac;

            $pehdsouflagesacbleu=$stock->pehdsouflagesacbleu;
            $pehdsouflagesacblanc=$stock->pehdsouflagesacblanc;
            $pehdsouflagesacjaune=$stock->pehdsouflagesacjaune;
            $pehdsouflagesacvert=$stock->pehdsouflagesacvert;
            $pehdsouflagesacneutre=$stock->pehdsouflagesacneutre;
            $pehdsouflagesacrouge=$stock->pehdsouflagesacrouge;
            $pehdsouflagesacjadida=$stock->pehdsouflagesacjadida;
            $pehdsouflagesacmaron=$stock->pehdsouflagesacmaron;
            $pehdsouflagesacnoire=$stock->pehdsouflagesacnoire;
            $pehdsouflagesacmulti=$stock->pehdsouflagesacmulti;
            $pehdsouflagesac=$stock->pehdsouflagesac;

            // dd($granule=$stock->granule);
            //  $extrude=$stock->extrude;

            $effectifstock=$stock->effectifstock;
            $nombre=$stock->nombre;
            $nombredesac=$stock->nombredesac;
            $totalegranule=$stock->totalegranule;
            $totaleppcoposac=$stock->totaleppcoposac;
            $totalepphomosac=$stock->totalepphomosac;
            $totalepetpreformsac=$stock->totalepetpreformsac;
            $totalepetbouteillesac=$stock->totalepetbouteillesac;
            $totalepehdcasiersac=$stock->totalepehdcasiersac;
            $totalepehdsouflagesac=$stock->totalepehdsouflagesac;
            $date=$stock->date;
            $totale=$stock->totale;
            // dd($totale);
            $somme=$stock->sum('totale');
            //dd($somme);
            $nombredesac=$stock->sum('stockproduitfini');
            $totalegranule=$stock->sum('granule');
            //dd($totalegranule);
            $totalppcopo=$stock->sum('ppcoposac');
            $totalpphomo=$stock->sum('pphomosac');
            $totalpetprefrom=$stock->sum('petpreformsac');
            $totalpetbouteille=$stock->sum('petbouteillesac');
            $totalpehdcasier=$stock->sum('pehdcasiersac');
            $totalpehdsouflage=$stock->sum('pehdsouflagesac');

            $granule=$stock->granule;
            // dd($granule+$pehdsouflage-$pehdsouflager);
            // $totale=$stock->last()->totale;
            $lasttotal=$stock->sum('nombre');
            $resultat2=$granule/25;
            
            $pehdsouflage=$pehdsouflagebleu+$pehdsouflageblanc+$pehdsouflagejaune+$pehdsouflagevert+$pehdsouflageneutre+$pehdsouflagerouge+$pehdsouflagejadida+$pehdsouflagemaron+$pehdsouflagenoire+$pehdsouflagemulti;
            $pehdsouflagesac=$pehdsouflagesacbleu+$pehdsouflagesacblanc+$pehdsouflagesacjaune+$pehdsouflagesacvert+$pehdsouflagesacneutre+$pehdsouflagesacrouge+$pehdsouflagesacjadida+$pehdsouflagesacmaron+$pehdsouflagesacnoire+$pehdsouflagesacmulti;
            $pehdsouflager=$pehdsouflagebleur+$pehdsouflageblancr+$pehdsouflagejauner+$pehdsouflagevertr+$pehdsouflageneutrer+$pehdsouflagerouger+$pehdsouflagejadidar+$pehdsouflagemaronr+$pehdsouflagenoirer+$pehdsouflagemultir;

            $totalesac=$resultat+$ppcoposac+$pphomosac+$pehdcasiersac+$petbouteillesac+$petpreformsac;
            $pehdsouflagebleureste=$pehdsouflagebleu-$pehdsouflagebleur;
            $pehdsouflageblancreste=$pehdsouflageblanc-$pehdsouflageblancr;
            $pehdsouflagejaunereste=$pehdsouflagejaune-$pehdsouflagejauner;
            $pehdsouflagevertreste=$pehdsouflagevert-$pehdsouflagevertr;
            $pehdsouflageneutrereste=$pehdsouflageneutre-$pehdsouflageneutrer;
            $pehdsouflagerougereste=$pehdsouflagerouge-$pehdsouflagerouger;
            $pehdsouflagejadidareste=$pehdsouflagejadida-$pehdsouflagejadidar;
            $pehdsouflagemaronreste=$pehdsouflagemaron-$pehdsouflagemaronr;
            $pehdsouflagenoirereste=$pehdsouflagenoire-$pehdsouflagenoirer;
            $pehdsouflagemultireste=$pehdsouflagemulti-$pehdsouflagemultir;

       // dd($nombredesac);
            Stockproduitfini::where('id', $id)->update([
            'stockproduitfini'=>$resultat+$resultat2,
            'pehdsouflagesacbleu'=>$pehdsouflagebleureste/25,
            'pehdsouflagesacblanc'=>$pehdsouflageblancreste/25,
            'pehdsouflagesacjaune'=>$pehdsouflagejaunereste/25,
            'pehdsouflagesacvert'=>$pehdsouflagevertreste/25,
            'pehdsouflagesacneutre'=>$pehdsouflageneutrereste/25,
            'pehdsouflagesacrouge'=>$pehdsouflagerougereste/25,
            'pehdsouflagesacjadida'=>$pehdsouflagejadidareste/25,
            'pehdsouflagesacmaron'=>$pehdsouflagemaronreste/25,
            'pehdsouflagesacnoire'=>$pehdsouflagenoirereste/25,
            'pehdsouflagesacmulti'=>$pehdsouflagemultireste/25,
            'pehdsouflagesac'=>$resultat,
            'extrude'=>$extrusionss-$totaleetdechet,
            'granule'=>$granule+$pehdsouflage-$pehdsouflager,
            'totale'=>$granule+$pehdsouflage-$pehdsouflager,
// a revoir
            'date'=>$date,
            'nombre'=>$nombredesac*25,
            'nombredesac'=>$nombredesac,
            'totaleppcoposac'=>$totalppcopo,
            'totalepphomosac'=>$totalpphomo,
            'totalepetpreformsac'=>$totalpetprefrom,
            'totalepetbouteillesac'=>$totalpetbouteille,
            'totalepehdcasiersac'=>$totalpehdcasier,
            'totalepehdsouflagesac'=>$totalpehdsouflage,
          
                    ]);
                  
                
            
            $vente= ventes::all();
            $nombresac=$vente->last()->nombredesac;
            
            $lastppcopo=$vente->last()->ppcopo;
            $lastppcopobleu=$vente->last()->ppcopobleu;
            $lastppcopoblanc=$vente->last()->ppcopoblanc;
            $lastppcopojaune=$vente->last()->ppcopojaune;
            $lastppcopovert=$vente->last()->ppcopovert;
            $lastppcopomauve=$vente->last()->ppcopomauve;
            $lastppcoporouge=$vente->last()->ppcoporouge;
            $lastppcopojadida=$vente->last()->ppcopojadida;
            $lastppcopomaron=$vente->last()->ppcopomaron;
            $lastppcoponoire=$vente->last()->ppcoponoire;
            $lastppcopomulti=$vente->last()->ppcopomulti;
                
            $lastppcoposac=$vente->last()->ppcoposac;
            $lastppcoposacbleu=$vente->last()->ppcoposacbleu;
            $lastppcoposacblanc=$vente->last()->ppcoposacblanc;
            $lastppcoposacjaune=$vente->last()->ppcoposacjaune;
            $lastppcoposacvert=$vente->last()->ppcoposacvert;
            $lastppcoposacmauve=$vente->last()->ppcoposacmauve;
            $lastppcoposacrouge=$vente->last()->ppcoposacrouge;
            $lastppcoposacjadida=$vente->last()->ppcoposacjadida;
            $lastppcoposacmaron=$vente->last()->ppcoposacmaron;
            $lastppcoposacnoire=$vente->last()->ppcoposacnoire;
            $lastppcoposacmulti=$vente->last()->ppcoposacmulti;
                
            $lastpphomo=$vente->last()->pphomo;
            $lastpphomobleu=$vente->last()->pphomobleu;
            $lastpphomoblanc=$vente->last()->pphomoblanc;
            $lastpphomojaune=$vente->last()->pphomojaune;
            $lastpphomovert=$vente->last()->pphomovert;
            $lastpphomomauve=$vente->last()->pphomomauve;
            $lastpphomorouge=$vente->last()->pphomorouge;
            $lastpphomojadida=$vente->last()->pphomojadida;
            $lastpphomomaron=$vente->last()->pphomomaron;
            $lastpphomonoire=$vente->last()->pphomonoire;
            $lastpphomomulti=$vente->last()->pphomomulti;
                
            $lastpphomosac=$vente->last()->pphomosac;
            $lastpphomosacbleu=$vente->last()->pphomosacbleu;
            $lastpphomosacblanc=$vente->last()->pphomosacblanc;
            $lastpphomosacjaune=$vente->last()->pphomosacjaune;
            $lastpphomosacvert=$vente->last()->pphomosacvert;
            $lastpphomosacmauve=$vente->last()->pphomosacmauve;
            $lastpphomosacrouge=$vente->last()->pphomosacrouge;
            $lastpphomosacjadida=$vente->last()->pphomosacjadida;
            $lastpphomosacmaron=$vente->last()->pphomosacmaron;
            $lastpphomosacnoire=$vente->last()->pphomosacnoire;
            $lastpphomosacmulti=$vente->last()->pphomosacmulti;
                
            $lastpetpreform=$vente->last()->petpreform;
            $lastpetpreformbleu=$vente->last()->petpreformbleu;
            $lastpetpreformblanc=$vente->last()->petpreformblanc;
                
            $lastpetpreformsac=$vente->last()->petpreformsac;
            $lastpetpreformsacbleu=$vente->last()->petpreformsacbleu;
            $lastpetpreformsacblanc=$vente->last()->petpreformsacblanc;
            
            $lastpetbouteille=$vente->last()->petbouteille;
            $lastpetbouteillebleu=$vente->last()->petbouteillebleu;
            $lastpetbouteilleblanc=$vente->last()->petbouteilleblanc;
            
            $lastpetbouteillesac=$vente->last()->petbouteillesac;
            $lastpetbouteillebleusac=$vente->last()->petbouteillesacbleu;
            $lastpetbouteilleblancsac=$vente->last()->petbouteillesacblanc;
                
            $lastpehdcasier=$vente->last()->pehdcasier;
            $lastpehdcasierbleu=$vente->last()->pehdcasierbleu;
            $lastpehdcasierblanc=$vente->last()->pehdcasierblanc;
            $lastpehdcasierjaune=$vente->last()->pehdcasierjaune;
            $lastpehdcasiervert=$vente->last()->pehdcasiervert;
            $lastpehdcasierneutre=$vente->last()->pehdcasierneutre;
            $lastpehdcasierrouge=$vente->last()->pehdcasierrouge;
            $lastpehdcasierjadida=$vente->last()->pehdcasierjadida;
            $lastpehdcasiermaron=$vente->last()->pehdcasiermaron;
            $lastpehdcasiernoire=$vente->last()->pehdcasiernoire;
            $lastpehdcasiermulti=$vente->last()->pehdcasiermulti;
                
            $lastpehdcasiersac=$vente->last()->pehdcasiersac;
            $lastpehdcasiersacbleu=$vente->last()->pehdcasiersacbleu;
            $lastpehdcasiersacblanc=$vente->last()->pehdcasiersacblanc;
            $lastpehdcasiersacjaune=$vente->last()->pehdcasiersacjaune;
            $lastpehdcasiersacvert=$vente->last()->pehdcasiersacvert;
            $lastpehdcasiersacneutre=$vente->last()->pehdcasiersacneutre;
            $lastpehdcasiersacrouge=$vente->last()->pehdcasiersacrouge;
            $lastpehdcasiersacjadida=$vente->last()->pehdcasiersacjadida;
            $lastpehdcasiersacmaron=$vente->last()->pehdcasiersacmaron;
            $lastpehdcasiersacnoire=$vente->last()->pehdcasiersacnoire;
            $lastpehdcasiersacmulti=$vente->last()->pehdcasiersacmulti;
            
            $lastpehdsouflage=$vente->last()->pehdsouflage;
            $lastpehdsouflagebleu=$vente->last()->pehdsouflagebleu;
            $lastpehdsouflageblanc=$vente->last()->pehdsouflageblanc;
            $lastpehdsouflagejaune=$vente->last()->pehdsouflagejaune;
            $lastpehdsouflagevert=$vente->last()->pehdsouflagevert;
            $lastpehdsouflageneutre=$vente->last()->pehdsouflageneutre;
            $lastpehdsouflagerouge=$vente->last()->pehdsouflagerouge;
            $lastpehdsouflagejadida=$vente->last()->pehdsouflagejadida;
            $lastpehdsouflagemaron=$vente->last()->pehdsouflagemaron;
            $lastpehdsouflagenoire=$vente->last()->pehdsouflagenoire;
            $lastpehdsouflagemulti=$vente->last()->pehdsouflagemulti;
            
            $lastpehdsouflagesac=$vente->last()->pehdsouflagesac;
            $lastpehdsouflagesacbleu=$vente->last()->pehdsouflagesacbleu;
            $lastpehdsouflagesacblanc=$vente->last()->pehdsouflagesacblanc;
            $lastpehdsouflagesacjaune=$vente->last()->pehdsouflagesacjaune;
            $lastpehdsouflagesacvert=$vente->last()->pehdsouflagesacvert;
            $lastpehdsouflagesacneutre=$vente->last()->pehdsouflagesacneutre;
            $lastpehdsouflagesacrouge=$vente->last()->pehdsouflagesacrouge;
            $lastpehdsouflagesacjadida=$vente->last()->pehdsouflagesacjadida;
            $lastpehdsouflagesacmaron=$vente->last()->pehdsouflagesacmaron;
            $lastpehdsouflagesacnoire=$vente->last()->pehdsouflagesacnoire;
            $lastpehdsouflagesacmulti=$vente->last()->pehdsouflagesacmulti;
            //dd($totale);
            $lasttotale=$vente->last()->totale;
                    
            DB::table('ventes')->insert([
                
                        'nombredesac'=>$nombresac+$totalesac,
                        'ppcopo'=>$lastppcopo+$ppcoposac*25,
                        'ppcopobleu'=>$lastppcopobleu+$ppcoposacbleu*25,
                        'ppcopoblanc'=>$lastppcopoblanc+$ppcoposacblanc*25,
                        'ppcopojaune'=>$lastppcopojaune+$ppcoposacjaune*25,
                        'ppcopovert'=>$lastppcopovert+$ppcoposacvert*25,
                        'ppcopomauve'=>$lastppcopomauve+$ppcoposacmauve*25,
                        'ppcoporouge'=>$lastppcoporouge+$ppcoposacrouge*25,
                        'ppcopojadida'=>$lastppcopojadida+$ppcoposacjadida*25,
                        'ppcopomaron'=>$lastppcopomaron+$ppcoposacmaron*25,
                        'ppcoponoire'=>$lastppcoponoire+$ppcoposacnoire*25,
                        'ppcopomulti'=>$lastppcopomulti+$ppcoposacmulti*25,
                
                        'ppcoposac'=>$lastppcoposac+$ppcoposac,
                        'ppcoposacbleu'=>$lastppcoposacbleu+$ppcoposacbleu,
                        'ppcoposacblanc'=>$lastppcoposacblanc+$ppcoposacblanc,
                        'ppcoposacjaune'=>$lastppcoposacjaune+$ppcoposacjaune,
                        'ppcoposacvert'=>$lastppcoposacvert+$ppcoposacvert,
                        'ppcoposacmauve'=>$lastppcoposacmauve+$ppcoposacmauve,
                        'ppcoposacrouge'=>$lastppcoposacrouge+$ppcoposacrouge,
                        'ppcoposacjadida'=>$lastppcoposacjadida+$ppcoposacjadida,
                        'ppcoposacmaron'=>$lastppcoposacmaron+$ppcoposacmaron,
                        'ppcoposacnoire'=>$lastppcoposacnoire+$ppcoposacnoire,
                        'ppcoposacmulti'=>$lastppcoposacmulti+$ppcoposacmulti,
                
                        'pphomo'=>$lastpphomo+$pphomosac*25,
                        'pphomobleu'=>$lastpphomobleu+$pphomosacbleu*25,
                        'pphomoblanc'=>$lastpphomoblanc+$pphomosacblanc*25,
                        'pphomojaune'=>$lastpphomojaune+$pphomosacjaune*25,
                        'pphomovert'=>$lastpphomovert+$pphomosacvert*25,
                        'pphomomauve'=>$lastpphomomauve+$pphomosacmauve*25,
                        'pphomorouge'=>$lastpphomorouge+$pphomosacrouge*25,
                        'pphomojadida'=>$lastpphomojadida+$pphomosacjadida*25,
                        'pphomomaron'=>$lastpphomomaron+$pphomosacmaron*25,
                        'pphomonoire'=>$lastpphomonoire+$pphomosacnoire*25,
                        'pphomomulti'=>$lastpphomomulti+$pphomosacmulti*25,
                
                        'pphomosac'=>$lastpphomosac+$pphomosac,
                        'pphomosacbleu'=>$lastpphomosacbleu+$pphomosacbleu,
                        'pphomosacblanc'=>$lastpphomosacblanc+$pphomosacblanc,
                        'pphomosacjaune'=>$lastpphomosacjaune+$pphomosacjaune,
                        'pphomosacvert'=>$lastpphomosacvert+$pphomosacvert,
                        'pphomosacmauve'=>$lastpphomosacmauve+$pphomosacmauve,
                        'pphomosacrouge'=>$lastpphomosacrouge+$pphomosacrouge,
                        'pphomosacjadida'=>$lastpphomosacjadida+$pphomosacjadida,
                        'pphomosacmaron'=>$lastpphomosacmaron+$pphomosacmaron,
                        'pphomosacnoire'=>$lastpphomosacnoire+$pphomosacnoire,
                        'pphomosacmulti'=>$lastpphomosacmulti+$pphomosacmulti,
            
                        'petpreform'=>$lastpetpreform+$petpreformsac*25,
                        'petpreformbleu'=>$lastpetpreformbleu+$petpreformsacbleu*25,
                        'petpreformblanc'=>$lastpetpreformblanc+$petpreformsacblanc*25,
                
                        'petpreformsac'=>$lastpetpreformsac+$petpreformsac,
                        'petpreformsacbleu'=>$lastpetpreformsacbleu+$petpreformsacbleu,
                        'petpreformsacblanc'=>$lastpetpreformsacblanc+$petpreformsacblanc,
            
                        'petbouteille'=>$lastpetbouteille+$petbouteillesac*25,
                        'petbouteillebleu'=>$lastpetbouteillebleu+$petbouteillesacbleu*25,
                        'petbouteilleblanc'=>$lastpetbouteilleblanc+$petbouteillesacblanc*25,
            
                        'petbouteillesac'=>$lastpetbouteillesac+$petbouteillesac,
                        'petbouteillebleusac'=>$lastpetbouteillebleusac+$petbouteillesacbleu,
                        'petbouteilleblancsac'=>$lastpetbouteilleblancsac+$petbouteillesacblanc,
                
                        'pehdcasier'=>$lastpehdcasier+$pehdcasiersac*25,
                        'pehdcasierbleu'=>$lastpehdcasierbleu+$pehdcasiersacbleu*25,
                        'pehdcasierblanc'=>$lastpehdcasierblanc+$pehdcasiersacblanc*25,
                        'pehdcasierjaune'=>$lastpehdcasierjaune+$pehdcasiersacjaune*25,
                        'pehdcasiervert'=>$lastpehdcasiervert+$pehdcasiersacvert*25,
                        'pehdcasierneutre'=>$lastpehdcasierneutre+$pehdcasiersacneutre*25,
                        'pehdcasierrouge'=>$lastpehdcasierrouge+$pehdcasiersacrouge*25,
                        'pehdcasierjadida'=>$lastpehdcasierjadida+$pehdcasiersacjadida*25,
                        'pehdcasiermaron'=>$lastpehdcasiermaron+$pehdcasiersacmaron*25,
                        'pehdcasiernoire'=>$lastpehdcasiernoire+$pehdcasiersacnoire*25,
                        'pehdcasiermulti'=>$lastpehdcasiermulti+$pehdcasiersacmulti*25,
                
                        'pehdcasiersac'=>$lastpehdcasiersac+$pehdcasiersac,
                        'pehdcasiersacbleu'=>$lastpehdcasiersacbleu+$pehdcasiersacbleu,
                        'pehdcasiersacblanc'=>$lastpehdcasiersacblanc+$pehdcasiersacblanc,
                        'pehdcasiersacjaune'=>$lastpehdcasiersacjaune+$pehdcasiersacjaune,
                        'pehdcasiersacvert'=>$lastpehdcasiersacvert+$pehdcasiersacvert,
                        'pehdcasiersacneutre'=>$lastpehdcasiersacneutre+$pehdcasiersacneutre,
                        'pehdcasiersacrouge'=>$lastpehdcasiersacrouge+$pehdcasiersacrouge,
                        'pehdcasiersacjadida'=>$lastpehdcasiersacjadida+$pehdcasiersacjadida,
                        'pehdcasiersacmaron'=>$lastpehdcasiersacmaron+$pehdcasiersacmaron,
                        'pehdcasiersacnoire'=>$lastpehdcasiersacnoire+$pehdcasiersacnoire,
                        'pehdcasiersacmulti'=>$lastpehdcasiersacmulti+$pehdcasiersacmulti,
                
                        'pehdsouflage'=>$lastpehdsouflage+$resultat*25,
                        'pehdsouflagebleu'=>$lastpehdsouflagebleu+$pehdsouflagesacbleu*25,
                        'pehdsouflageblanc'=>$lastpehdsouflageblanc+$pehdsouflagesacblanc*25,
                        'pehdsouflagejaune'=>$lastpehdsouflagejaune+$pehdsouflagesacjaune*25,
                        'pehdsouflagevert'=>$lastpehdsouflagevert+$pehdsouflagesacvert*25,
                        'pehdsouflageneutre'=>$lastpehdsouflageneutre+$pehdsouflagesacneutre*25,
                        'pehdsouflagerouge'=>$lastpehdsouflagerouge+$pehdsouflagesacrouge*25,
                        'pehdsouflagejadida'=>$lastpehdsouflagejadida+$pehdsouflagesacjadida*25,
                        'pehdsouflagemaron'=>$lastpehdsouflagemaron+$pehdsouflagesacmaron*25,
                        'pehdsouflagenoire'=>$lastpehdsouflagenoire+$pehdsouflagesacnoire*25,
                        'pehdsouflagemulti'=>$lastpehdsouflagemulti+$pehdsouflagesacmulti*25,
                
                        'pehdsouflagesac'=>$lastpehdsouflagesac+$resultat,
                        'pehdsouflagesacbleu'=>$lastpehdsouflagesacbleu+$pehdsouflagesacbleu,
                        'pehdsouflagesacblanc'=>$lastpehdsouflagesacblanc+$pehdsouflagesacblanc,
                        'pehdsouflagesacjaune'=>$lastpehdsouflagesacjaune+$pehdsouflagesacjaune,
                        'pehdsouflagesacvert'=>$lastpehdsouflagesacvert+$pehdsouflagesacvert,
                        'pehdsouflagesacneutre'=>$lastpehdsouflagesacneutre+$pehdsouflagesacneutre,
                        'pehdsouflagesacrouge'=>$lastpehdsouflagesacrouge+$pehdsouflagesacrouge,
                        'pehdsouflagesacjadida'=>$lastpehdsouflagesacjadida+$pehdsouflagesacjadida,
                        'pehdsouflagesacmaron'=>$lastpehdsouflagesacmaron+$pehdsouflagesacmaron,
                        'pehdsouflagesacnoire'=>$lastpehdsouflagesacnoire+$pehdsouflagesacnoire,
                        'pehdsouflagesacmulti'=>$lastpehdsouflagesacmulti+$pehdsouflagesacmulti,
                        'totale'=>$lasttotale+$totalesac*25,
                        'date'=>$date,
                                    
                        
                        ]);
               
            $extrusion->update($input);
 
            return redirect()->route('extrusions.index', compact('extrusion'))->withFail('BRAVO, L-extrusion de la matiere Id (numero '.$extrusion->id.') a ete effectué avec succes, La matiere est mise en sac.');
        }
        return redirect()->route('extrusions.edit', compact('extrusion'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
}
