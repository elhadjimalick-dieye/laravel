<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employe;
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
        return view('employes.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employe = Employe::pluck('prenom','nom','matricule','date_de_naissance','situation_mat','date_dentre','date_sorti','nombre_de_part')->all();
        return view('employes.create',compact('employe'));
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

        ]);


        return redirect()->route('employes.index')
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

        return view('employes.edit',compact('employe'));
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
        ]);

        return redirect()->route('employes.index')
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
