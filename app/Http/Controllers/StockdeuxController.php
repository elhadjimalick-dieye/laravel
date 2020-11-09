<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Extrusion;
use App\Stockproduitfini;
use DB;
use App\Ventes;

class StockdeuxController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Stockproduitfini::orderBy('id', 'DESC')->paginate(10);
        
        return view('sortiepourventes.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stock = Stockproduitfini::all();

        return view('sortiepourventes.create', compact('stock'));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',

        ]);

        $input = $request->all();
        
        return redirect()->route('sortiepourventes.index', compact('extrusion'))->withFail('BRAVO, Le sac de la matiere Id (numero '.$sac->id.') a ete effectué avec succes, La quantite en PP et PET sont mises en sac le PEHD en atelier d-extrusion .');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $stock = Stockproduitfini::find($id);
    return redirect()->route('sortiepourventes.create', compact('stock'))->withFail('Veillez bien verifier La quantite que vous avez saisies, surement il y\'a une difference avec la quantite totale. ');

    }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    $stock = Stockproduitfini::find($id);

    $stockproduitfini=$stock->stockproduitfini;
   $ppcoposacbleu=$stock->ppcoposacbleu;
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
   $ppcoposac=$stock->ppcoposac;

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
  
   $totale=$stock->totales=$extrude+$granule-$totaler;
   $date=$stock->$date;

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
    $lasttotale=$vente->last()->totale;

       Ventes::where('id', $id)->update([
        
                'nombredesac'=>$nombresac+$totalesac,
                'ppcopo'=>$lastppcopo+$ppcopo,
                'ppcopobleu'=>$lastppcopobleu+$ppcopobleu,
                'ppcopoblanc'=>$lastppcopoblanc+$ppcopoblanc,
                'ppcopojaune'=>$lastppcopojaune+$ppcopojaune,
                'ppcopovert'=>$lastppcopovert+$ppcopovert,
                'ppcopomauve'=>$lastppcopomauve+$ppcopomauve,
                'ppcoporouge'=>$lastppcoporouge+$ppcoporouge,
                'ppcopojadida'=>$lastppcopojadida+$ppcopojadida,
                'ppcopomaron'=>$lastppcopomaron+$ppcopomaron,
                'ppcoponoire'=>$lastppcoponoire+$ppcoponoire,
                'ppcopomulti'=>$lastppcopomulti+$ppcopomulti,
        
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
        
                'pphomo'=>$lastpphomo+$pphomo,
                'pphomobleu'=>$lastpphomobleu+$pphomobleu,
                'pphomoblanc'=>$lastpphomoblanc+$pphomoblanc,
                'pphomojaune'=>$lastpphomojaune+$pphomojaune,
                'pphomovert'=>$lastpphomovert+$pphomovert,
                'pphomomauve'=>$lastpphomomauve+$pphomomauve,
                'pphomorouge'=>$lastpphomorouge+$pphomorouge,
                'pphomojadida'=>$lastpphomojadida+$pphomojadida,
                'pphomomaron'=>$lastpphomomaron+$pphomomaron,
                'pphomonoire'=>$lastpphomonoire+$pphomonoire,
                'pphomomulti'=>$lastpphomomulti+$pphomomulti,
        
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

                'petpreform'=>$lastpetpreform+$petpreform,
                'petpreformbleu'=>$lastpetpreformbleu+$petpreformbleu,
                'petpreformblanc'=>$lastpetpreformblanc+$petpreformblanc,
        
                'petpreformsac'=>$lastpetpreformsac+$petpreformsac,
                'petpreformsacbleu'=>$lastpetpreformsacbleu+$petpreformsacbleu,
                'petpreformsacblanc'=>$lastpetpreformsacblanc+$petpreformsacblanc,

                'petbouteille'=>$lastpetbouteille+$petbouteille,
                'petbouteillebleu'=>$lastpetbouteillebleu+$petbouteillebleu,
                'petbouteilleblanc'=>$lastpetbouteilleblanc+$petbouteilleblanc,

                'petbouteillesac'=>$lastpetbouteillesac+$petbouteillesac,
                'petbouteillebleusac'=>$lastpetbouteillebleusac+$petbouteillesacbleu,
                'petbouteilleblancsac'=>$lastpetbouteilleblancsac+$petbouteillesacblanc,
        
                'pehdcasier'=>$lastpehdcasier+$pehdcasier,
                'pehdcasierbleu'=>$lastpehdcasierbleu+$pehdcasierbleu,
                'pehdcasierblanc'=>$lastpehdcasierblanc+$pehdcasierblanc,
                'pehdcasierjaune'=>$lastpehdcasierjaune+$pehdcasierjaune,
                'pehdcasiervert'=>$lastpehdcasiervert+$pehdcasiervert,
                'pehdcasierneutre'=>$lastpehdcasierneutre+$pehdcasierneutre,
                'pehdcasierrouge'=>$lastpehdcasierrouge+$pehdcasierrouge,
                'pehdcasierjadida'=>$lastpehdcasierjadida+$pehdcasierjadida,
                'pehdcasiermaron'=>$lastpehdcasiermaron+$pehdcasiermaron,
                'pehdcasiernoire'=>$lastpehdcasiernoire+$pehdcasiernoire,
                'pehdcasiermulti'=>$lastpehdcasiermulti+$pehdcasiermulti,
        
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
        
                'pehdsouflage'=>$lastpehdsouflage+$pehdsouflage,
                'pehdsouflagebleu'=>$lastpehdsouflagebleu+$pehdsouflagebleu,
                'pehdsouflageblanc'=>$lastpehdsouflageblanc+$pehdsouflageblanc,
                'pehdsouflagejaune'=>$lastpehdsouflagejaune+$pehdsouflagejaune,
                'pehdsouflagevert'=>$lastpehdsouflagevert+$pehdsouflagevert,
                'pehdsouflageneutre'=>$lastpehdsouflageneutre+$pehdsouflageneutre,
                'pehdsouflagerouge'=>$lastpehdsouflagerouge+$pehdsouflagerouge,
                'pehdsouflagejadida'=>$lastpehdsouflagejadida+$pehdsouflagejadida,
                'pehdsouflagemaron'=>$lastpehdsouflagemaron+$pehdsouflagemaron,
                'pehdsouflagenoire'=>$lastpehdsouflagenoire+$pehdsouflagenoire,
                'pehdsouflagemulti'=>$lastpehdsouflagemulti+$pehdsouflagemulti,
        
                'pehdsouflagesac'=>$lastpehdsouflagesac+$pehdsouflagesac,
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
        
                'totale'=>$lasttotale+$totale,
                'date'=>$date,
                           
                
                ]);
                return redirect()->route('sortiepourventes.index', compact('stock'))->withFail('Veillez bien verifier La quantite que vous avez saisies, surement il y-a une difference avec la quantite totale. ');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock = Stockproduitfini::find($id);
        return view('sortiepourventes.show',compact('stock'));
    }
}
