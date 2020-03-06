<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Extrusion;
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

            $stockproduitfini= Stockproduitfini::all();
            //dd($stockproduitfini->last()->granule);
            $granule=$stockproduitfini->last()->granule;
            $totale=$stockproduitfini->last()->totale;
            //dd($totale);
            $stockproduit=$stockproduitfini->last()->stockproduitfini;
            //dd($pehdsouflagesac);
            $resultat2=$granule/25;
           // dd($resultat2);
            $stock=$stockproduit-$stockproduitfini->last()->pehdsouflagesac+$pehdsouflagesac;
           // dd($resultat);
            Stockproduitfini::where('id', $id)->update([
               // dd($resultat),
            'stockproduitfini'=>$resultat+$resultat2,
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
            'pehdsouflagesac'=>$resultat,
            

           //dd($resultat2+$resultat),
            'extrude'=>$extrusionss-$totaleetdechet,
            //dd($pehdsouflage),
            'granule'=>$granule+$pehdsouflage-$pehdsouflager,
           // dd($totale),
            'totale'=>$totale=$granule+$pehdsouflage-$pehdsouflager,
            //dd($totale),
           // $stockproduitfini->date=$date,
 
                    ]);

            $extrusion->update($input);
 
            return redirect()->route('extrusions.index', compact('extrusion'))->withFail('BRAVO, L-extrusion de la matiere Id (numero '.$extrusion->id.') a ete effectué avec succes, La matiere est mise en sac.');
        }
        return redirect()->route('extrusions.edit', compact('extrusion'))->withFail('Veillez bien verifier Les quantites que vous avez saisies, surement il y-a une difference avec la quantite qui est sur cet QUART. ');
    }
}
