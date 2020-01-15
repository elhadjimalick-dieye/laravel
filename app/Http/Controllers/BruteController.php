<?php

namespace App\Http\Controllers;
use App\Brute;
use App\Collecteur;
use Illuminate\Http\Request;

class BruteController extends Controller
{
 /**
     * Show the form for creating a new resource.
     *
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = Brute::orderBy('id','DESC')->paginate(6);
     $collecteurs = Collecteur::pluck('nomComplet','nomComplet')->all();
     
        return view('brutes.index',compact('data','collecteurs'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
        }
    

    public function create()
    {
    $brute = brute::pluck('collecteur_id','quantite','prix_unitaire','monatnt','commentaire','lieu')->all();
    $collecteurs = collecteur::all();
    return view('brutes.create',compact('collecteurs','brute'));

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
            'collecteur_id' => 'required',
            'quantite' => 'required',
            'prix_unitaire' => 'required',
            'montant' => 'required',
            'commentaire' => 'required',
            'lieu' => 'required',
        ]);


        $input = $request->all();
        $brute = brute::create($input);
        return redirect()->route('brutes.index')
                        ->with('success','collecte created successfully');
    }



      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brute = brute::find($id);
        return view('brutes.show',compact('brute'));
    }

}
