<?php

namespace App\Http\Controllers;
use App\Collecteur;
use DB;
use Illuminate\Http\Request;

class CollecteurControlleur extends Controller
{

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = Collecteur::orderBy('id','DESC')->paginate(6);
        return view('collecteurs.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
        }
    
   
    
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collecteur = Collecteur::pluck('nomComplet','region','departement','ville','quartier','contact')->all();
        return view('collecteurs.create',compact('collecteur'));
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collecteur = Collecteur::find($id);
        return view('collecteurs.show',compact('collecteur'));
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
            'region' => 'required',
            'departement' => 'required',
            'ville' => 'required',
            'quartier' => 'required',
            'contact' => 'required',
   
        ]);


        $input = $request->all();
        $collecteur = Collecteur::create($input);
        return redirect()->route('collecteurs.index')
                        ->with('success','collecteur created successfully');
    }

}
