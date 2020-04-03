<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use App\CollecteRecuplasts;
use Yajra\Datatables\Datatables;

use DB;

class ClientsController extends Controller
{


    
   /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Clients::orderBy('id','DESC')->paginate(5);
        //dd($types);
        return view('clients.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Clients::all();
        return view('clients.create',compact('client'));
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
            'matricule' => 'unique:fournisseurs,numero',
            'contact' => 'required',
            'adresse' => 'required',
        

        ]);
        $input = $request->all();
        $date = (154263);
        $min_epoch = strtotime($date);
        $var = rand($min_epoch,1000);
        $strval ='CL_201';
        $items = ($strval.$var); 
        //dd($items);
        DB::table('clients')->insert([
            'matricule' => $items,
            'nomComplet' => $request->input('nomComplet'),
            'contact' => $request->input('contact'),
            'adresse' => $request->input('adresse'),
            'totaleachete' =>0,
            'quantitetotale' =>0,
            'creance' =>0,
            'restant_du' =>0,
  

        ]);
        return redirect()->route('clients.index')
                        ->withFail('Client ajouter avec succés . ');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Clients::find($id);

        return view('clients.show',compact('client'));
    }

 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clients::find($id);
        return view('clients.edit',compact('client'));
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
            'adresse' => 'required',
            'totaleachete'=> 'required',
            'quantitetotale'=> 'required',
            'creance'=> 'required',
            'restant_du'=> 'required',
        
        ]);


        $input = $request->all();

        $client = Clients::find($id);

        $client->update($input);
        return redirect()->route('clients.index',compact('client'))
                        ->withFail('Information du client modifier avec succés. ');
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
