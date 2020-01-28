<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\CollecteRecuplasts;

use DB;

class Fournisseurss extends Controller
{
   /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Fournisseur::orderBy('id','DESC')->paginate(5);
        //$collecteRecuplasts = CollecteRecuplasts::pluck( 'avance')->all();
        $collecteRecuplasts = CollecteRecuplasts::all();

        return view('fournisseurs.index',compact('data','collecteRecuplasts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseurs.create');
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
            'nomComplet' => 'required',
            'contact' => 'required',
            'region' => 'required',
            'departement' => 'required',
            'commune' => 'required',
            'numero' => 'required|unique:fournisseurs,numero',

        ]);
        $input = $request->all();

        $fournisseur = fournisseur::create($input);
        return redirect()->route('fournisseurs.index',compact('fournisseur'))
                        ->with('success','fournisseur created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseur = fournisseur::find($id);

        return view('fournisseurs.show',compact('fournisseur'));
    }

 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = fournisseur::find($id);
        $recuplast = CollecteRecuplasts::pluck('fournisseur','date_reception','quantite', 'avance','reglement_definitif','commentaire','prix','montant')->all();

        return view('fournisseurs.edit',compact('fournisseur','recuplast'));
        return view('payementrecuplasts.edit',compact('fournisseur','recuplast'));
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $this->validate($request, [
            'nomComplet' => 'required',
            'contact' => 'required',
            'region' => 'required',
            'departement' => 'required',
            'commune' => 'required',

        ]);


        $input = $request->all();

        $fournisseur = fournisseur::find($id);

        $fournisseur->update($input);
        return redirect()->route('fournisseurs.index',compact('fournisseur'))
                        ->with('success','fournisseur updated successfully');
    }
 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fournisseur::find($id)->delete();
        return redirect()->route('fournisseurs.index')
                        ->with('success','fournisseur deleted successfully');
    }


}
