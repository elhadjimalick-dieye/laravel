<?php

namespace App\Http\Controllers;

use App\CollecteRecuplasts;
use App\Fournisseur;
use App\Fourniseurecuplast;
use DB;
use Illuminate\Http\Request;

class payementrecuplast extends Controller
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
    
        return view('payementrecuplasts.index', compact('data', 'fournisseur'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
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
        // $fournisseurs = Fournisseur::all();
        $fournisseurs = Fournisseur::all();
     
        //$fourniseurecuplast = Fourniseurecuplast::all();
        return view('payementrecuplasts.edit', compact('collecteRecuplasts', 'fournisseurs'));
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
            
        ]);
        $input = $request->all();
        $collecteRecuplasts = CollecteRecuplasts::find($id);
        $fournisseurs=Fournisseur::findorFail($collecteRecuplasts->fournisseur);
        $montant= $collecteRecuplasts->quantite*$collecteRecuplasts->prix;
        $solde = $request->input('avance');
        $avance=$fournisseurs->avance+$solde;

        $fournisseurs->update([
       'avance' =>$avance,
        'restant_du'=>$montant-$avance

              ]);
        return redirect()->route('payementrecuplasts.index', compact('fournisseurs'))
                        ->with('success', 'collecte recuplast updated successfully');
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collecteRecuplasts = CollecteRecuplasts::find($id);
        return view('payementrecuplasts.show', compact('collecteRecuplasts'));
    }
}
