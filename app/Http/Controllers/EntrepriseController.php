<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollectEntreprise;
use App\Fournisseur;


class EntrepriseController extends Controller
{

    /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = CollectEntreprise::orderBy('id','DESC')->paginate(5);
        $fournisseurs = Fournisseur::pluck('nomComplet','nomComplet')->all();

        return view('collectes.index',compact('data','fournisseurs'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
            

    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::all();
        $collectEntreprises = CollectEntreprise::pluck('fournisseur_id','pphomo','ppcopo','dechet','pet','pehd','date_reception','quantite', 'avance','reglement_definitif','commentaire','prix','montant')->all();
        return view('collectes.create',compact('collectEntreprises','fournisseurs'));
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
            'fournisseur_id' => 'required',
            'pphomo' => 'required',
            'ppcopo'=> 'required',
            'dechet'=> 'required',
            'pet'=> 'required',
            'pehd'=> 'required',
            'date_reception'=> 'required',
            'quantite'=> 'required',
            'prix'=> 'required',
            'montant'=> 'required',
        ]);

        $input = $request->all();
        $fournisseurs= Fournisseur::all();
        $collectEntreprises = CollectEntreprise::create($input);
        return redirect()->route('collectes.index',compact('collectEntreprises','fournisseurs'))
        ->with('success','collecte entreprise created successfully');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseurs= Fournisseur::all();

        $collectEntreprises = CollectEntreprise::find($id);
        return view('collectes.show',compact('collectEntreprises','fournisseurs'));
    }

}
