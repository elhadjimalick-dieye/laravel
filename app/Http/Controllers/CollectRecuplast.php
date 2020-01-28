<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollecteRecuplasts;
use App\Fournisseur;
use App\DepotCollecte;
use DB;

class CollectRecuplast extends Controller
{
    /**
       * Display a listing of the resource.
      * @param  int  $id
       * @return \Illuminate\Http\Response
       */
    public function index(Request $request)
    {
        $data = CollecteRecuplasts::orderBy('id', 'DESC')->paginate(5);
        
        $fournisseur = Fournisseur::pluck('nomComplet', 'nomComplet')->all();
    
        return view('collecterecuplasts.index', compact('data', 'fournisseur'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fournisseurs =Fournisseur::all();
        $collecteRecuplasts = CollecteRecuplasts::pluck('fournisseur', 'date_reception', 'quantite', 'reglement_definitif', 'commentaire', 'prix', 'montant')->all();

        return view('collecterecuplasts.create', compact('collecteRecuplasts', 'fournisseurs'));
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
            'date_reception' => 'required',
            'quantite' => 'required',
            'prix' => 'required',
        ]);

        $input = $request->all();
        $fournisseurs = Fournisseur::all();
        $collecteRecuplasts = CollecteRecuplasts::all();
        //$depotCollecte = DepotCollecte::pluck('quantiteCollecter','dechet','quantiteEntrante','quantiteSortante','quantiteTotale')->all();

        $depotCollecte= new DepotCollecte();
        //$depotCollecte=DepotCollecte::findorFail($collecteRecuplasts->quantite);

      // $depotCollecte=DepotCollecte::all();
        $quantites=$request->input('quantite');
      
        
        $quantiteTotale=$depotCollecte->quantiteTotale+$quantites;
       // dd($quantiteTotale);
        $quantiteEntrante=$depotCollecte->quantiteEntrante+$quantites;
      //  dd($quantiteEntrante);
       // $quantiteTotale=$depotCollecte->quantiteTotale+$quantiteEntrante;
        //pour la production 
        //$quantiteSortante=$quantiteTotale-$depotCollecte->quantiteSortante;
        
        $quantiteTotale=$depotCollecte->quantiteTotale;
      //  dd($quantiteTotale);

 
        $depotCollecte->update([
        'quantiteEntrante' =>$quantiteEntrante,
        'quantiteTotale' =>$quantiteTotale,

        //'quantiteCollecter' =>$quantiteEntrante,
       // 'quantiteSortante' =>$,


         //'credit'=>$montant-$avance
 
               ]);

               $fournisseurs->update([
                'avance' =>$avance,
                 'restant_du'=>$montant-$avance
         
                       ]);
              // dd($quantiteEntrante);

        $collecteRecuplasts = CollecteRecuplasts::create($input);
        return redirect()->route('collecterecuplasts.index', compact('collecteRecuplasts','fournisseurs','depotCollecte'))
                        ->with('success', 'collecte recuplast created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collecteRecuplasts = CollecteRecuplasts::find($id);
        $fournisseurs = Fournisseur::all();

        return view('collecterecuplasts.edit', compact('collecteRecuplasts', 'fournisseurs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date_reception' => 'required',
            'quantite' => 'required',
            
        ]);
        $input = $request->all();

        $collecteRecuplasts = CollecteRecuplasts::find($id);
        $collecteRecuplasts->update($input);


        return redirect()->route('collecterecuplasts.index')
                        ->with('success', 'collecte recuplast updated successfully');
    }
}
