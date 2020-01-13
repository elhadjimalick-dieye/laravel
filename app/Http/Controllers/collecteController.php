<?php

namespace App\Http\Controllers;
use App\Collecte;
use DB;
use Illuminate\Http\Request;

class collecteController extends Controller
{
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = Collecte::orderBy('id','DESC')->paginate(6);
        return view('collectes.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
        }
    

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collecte = Collecte::pluck('prenom_collecteur','nom_collecteur','quantite','prix_unitaire','montant')->all();
        return view('collectes.create',compact('collecte'));
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


           /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prenom_collecteur' => 'required',
            'nom_collecteur' => 'required',
            'quantite' => 'required',
            'prix_unitaire' => 'required',
            'montant' => 'required',
            'collecteur_id' => 'required',

            
   
        ]);
        $input = $request->all();
        $collecte = Collecte::create($input);
        return redirect()->route('collectes.index')
                        ->with('success','collecte created successfully');


    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collecte = Collecte::find($id);
      

        return view('collectes.edit',compact('collecte'));
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
            'prenom_collecteur' => 'required',
            'nom_collecteur' => 'required',
            'quantite' => 'required',
            'prix_unitaire' => 'required',
            'montant' => 'required',
            'collecteur_id' => 'required',



        ]);


    

        return redirect()->route('collectes.index')
                        ->with('success','collecte updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Collecte::find($id)->delete();
        return redirect()->route('collectes.index')
                        ->with('success','collecte deleted successfully');
    }



   }
