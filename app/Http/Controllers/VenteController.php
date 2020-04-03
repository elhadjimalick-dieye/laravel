<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Id;
use App\Extrusion;
use App\Stockproduitfini;
use DB;
use App\Ventes;

class VenteController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Ventes::orderBy('id', 'DESC')->paginate(10);
        return view('ventes.index', compact('data'))
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
        $ventes = Ventes::all();

        return view('ventes.create', compact('ventes'));
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

       
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vente = Ventes::find($id);
        return view('ventes.show',compact('vente'));
        

    }

}

