<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use App\CollecteRecuplasts;
use App\TypeCollecteur;
use Yajra\Datatables\Datatables;

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
        $types = TypeCollecteur::pluck( 'libelle','libelle')->all();
        //dd($types);
        return view('fournisseurs.index',compact('data','types'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = TypeCollecteur::all();
        $fournisseur = Fournisseur::pluck('avance','solde','id','nomComplet','contact','region','departement','commune','quartier','restant_du','numero','type')->all();
        return view('fournisseurs.create',compact('fournisseur','types'));
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
            'type' => 'required',
            'numero' => 'unique:fournisseurs,numero',

        ]);
        $input = $request->all();
        $fournisseur= Fournisseur::all();
        $date = (154263);
        $min_epoch = strtotime($date);
        $var = rand($min_epoch,1000);
        $strval ='FR_401';
        $items = ($strval.$var); 
        //dd($items);
        DB::table('fournisseurs')->insert([
            'numero' => $items,
            'type' => $request->input('type'),
            'nomComplet' => $request->input('nomComplet'),
            'avance' => $request->input('avance'),
            'solde' => $request->input('solde'),
            'contact' => $request->input('contact'),
            'region' => $request->input('region'),
            'departement' => $request->input('departement'),
            'commune' => $request->input('commune'),
            'quartier' => $request->input('quartier'),
            'restant_du' => $request->input('restant_du'),
            'quartier' => $request->input('quartier'),


        ]);
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
        $types = TypeCollecteur::all();

        return view('fournisseurs.show',compact('fournisseur','types'));
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
        $types = TypeCollecteur::all();

        return view('fournisseurs.edit',compact('fournisseur','recuplast','types'));
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
            'type' => 'required',


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
    public function massDestroy(MassDestroyUserRequest $request)
    {
        CollectEntreprise::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    
}
