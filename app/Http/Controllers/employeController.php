<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employe;
use App\Service;

use DB;

class employeController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Employe::orderBy('id','DESC')->paginate(5);
        $services = Service::pluck('libelle','libelle')->all();

        return view('employes.index',compact('data','services'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $employe = Employe::pluck('prenom','nom','matricule','date_de_naissance','situation_mat','date_dentre','date_sorti','nombre_de_part','service_id')->all();
        return view('employes.create',compact('employe','services'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'matricule'=> 'required',
            'date_de_naissance'=> 'required',
            'situation_mat'=> 'required',
            'date_dentre'=> 'required',
            'date_sorti'=> 'required',
            'nombre_de_part'=> 'required',
            'service_id'=> 'required',


        ]);

        $input = $request->all();
        $employe = Employe::create($input);
        return redirect()->route('employes.index',compact('employe'))
        ->with('success','employe created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employe = Employe::find($id);
        return view('employes.show',compact('employe'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = Employe::find($id);
        $services =Service::all();
        return view('employes.edit',compact('employe','services'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'matricule'=> 'required',
            'date_de_naissance'=> 'required',
            'situation_mat'=> 'required',
            'date_dentre'=> 'required',
            'date_sorti'=> 'required',
            'nombre_de_part'=> 'required',
            'service_id'=> 'required',

        ]);
        $input = $request->all();
        $employe = Employe::find($id);
        $employe->update($input);
        return redirect()->route('employes.index','employe')
                        ->with('success','employe updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employe::find($id)->delete();
        return redirect()->route('employes.index')
                        ->with('success','employe deleted successfully');
    }

}
