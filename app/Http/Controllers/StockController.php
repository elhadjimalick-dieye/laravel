<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Extrusion;
use App\Stockproduitfini;
use DB;

class StockController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Stockproduitfini::orderBy('id', 'DESC')->paginate(10);
        
        return view('stockproduitfinis.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $stock = Stockproduitfini::find($id);
        $extrusion = Extrusion::find($id);

        return view('stockproduitfinis.create', compact('stock', 'extrusion'));
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
            'effectifstock' => 'required',

        ]);

        $input = $request->all();
        $sac=sac::find($id);
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
        
                   
        
        return redirect()->route('stockproduitfinis.index', compact('extrusion'))->withFail('BRAVO, Le sac de la matiere Id (numero '.$sac->id.') a ete effectué avec succes, La quantite en PP et PET sont mises en sac le PEHD en atelier d-extrusion .');
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
       

        return view('stockproduitfinis.edit', compact('stock'));
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
        ]);

        $input = $request->all();
        $stock=Stockproduitfini::find($id);
        $granule=$request->input('granule');
        $extrude=$stock->extrude;
        $date=$request->input('date');

        $totale=$stock->totale;
        $extrusion= Extrusion::all();
        //dd($extrusion->last()->extrusion);

        if ($extrude==0) {
            return redirect()->route('stockproduitfinis.index', compact('stock'))->withFail('Ce QUART ne dispose pas de pehd soufflage.');
        }
 
        // dd($extrusion->pehdsouflage);
        if ($granule==$totale) {
            Stockproduitfini::where('id', $id)->update([
                
                    'extrude'=>0,
                    'granule'=>$granule,
                    'date'=>$date,
                ]);

            Extrusion::where('id', $id)->update([
                    'extrusion'=>0,
                   // 'pehdsouflage'=>$extrusion->extrusion,
                    'decheextrusion'=>0,
                    'date'=>$date,
                            
                            ]);

            $stock->update($input);
            return redirect()->route('stockproduitfinis.index', compact('stock'))->withFail('BRAVO, la matiere Id (numero '.$stock->id.') a ete ajoute sur le granule avec succes.');
        }
        return redirect()->route('stockproduitfinis.edit', compact('stock'))->withFail('Veillez bien verifier La quantite que vous avez saisies, surement il y-a une difference avec la quantite totale. ');
    }
}
