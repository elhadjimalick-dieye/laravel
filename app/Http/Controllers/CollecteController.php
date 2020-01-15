<?php

namespace App\Http\Controllers;
use App\Collecte;
use App\Collecteur;
use Illuminate\Http\Request;

class CollecteController extends Controller
{

  /**
     * Show the form for creating a new resource.
     *
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = Collecte::orderBy('id','DESC')->paginate(6);
       // $collecteurs = Collecteur::pluck('nom','prenom')->all();
        $collecteurs= Collecteur::all();
        return view('collectes.index',compact('data','collecteurs'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
        }
    

    public function create()
    {
    $collecte = Collecte::pluck('collecteur_id','quantite','prix_unitaire','monatnt','pp_copo','pp_homo','pehd','pet','commentaire','lieu')->all();
    $collecteurs = Collecteur::all();
    return view('collectes.create',compact('collecteurs','collecte'));

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
            'pp_copo' => 'required',
            'pehd' => 'required',
            'pp_homo' => 'required',
            'pet' => 'required',
            'montant' => 'required',
            'commentaire' => 'required',
            'lieu' => 'required',
            'dechet' => 'required',



        ]);


        $input = $request->all();
        $collecte = Collecte::create($input);
        return redirect()->route('collectes.index')
                        ->with('success','collecteur created successfully');
    }



      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collecte = Collecte::find($id);
        return view('collectes.show',compact('collecte'));
    }


}
