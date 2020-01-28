<?php

namespace App\Http\Controllers;
use App\DepotCollecte;
use Illuminate\Http\Request;
//use Illuminate\Support\Collection ;
use App\Http\Controllers\all;
use App\Http\Controllers\CollecteRecuplasts;
use Illuminate\Support\Collection;
use DB;


class DepotCollectes extends Controller
{

     /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DepotCollecte::orderBy('id', 'DESC')->paginate(5);
        
       // $fournisseur = Fournisseur::pluck('nomComplet', 'nomComplet')->all();
    
        return view('depotCollectes.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $depotCollecte =DepotCollecte::all();

        return view('depotCollectes.create', compact('depotCollecte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'date_reception' => 'required',
            //'quantite' => 'required',
           // 'prix' => 'required',
        ]);

        $input = $request->all();
       $depotCollecte = DB::table('depot_collectes')->get();
      
      //$quantiteinitiale = DepotCollecte::max('quantiteinitiale')->latest();
      
      $id =  DB::table('depot_collectes', 'id')->latest('id')->first('quantiteinitiale');

      dd( $id);
        $quantiteSortante=$request->input('quantiteSortante');
        $quantiteEntrante=$request->input('quantiteEntrante');
        $dechet=$request->input('dechet');
       
        $depot=($quantiteinitiale+$quantiteEntrante)-$quantiteSortante;
        $quantiteinitiale=$quantiteinitiale+$quantiteEntrante;
      
        $depotCollecte = DepotCollecte::create($input);
        $depotCollecte->update([
             'quantiteinitiale'=>$quantiteinitiale,
             'quantiteEntrante'=>$quantiteEntrante,
             'quantiteSortante'=>$quantiteSortante,
             'depot'=>$depot,
                   ]);

        return redirect()->route('depotCollectes.index', compact('depotCollecte'))
                        ->with('success', 'collecte recuplast created successfully');
    }


  
}
