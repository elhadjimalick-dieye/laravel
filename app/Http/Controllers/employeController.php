<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employe;
use App\Service;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use DB;

class employeController extends Controller
{
  /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Employe::orderBy('id','DESC')->paginate(5);
        //$services = Service::pluck('libelle','libelle')->all();
        //$roles = Roles::pluck('name','name')->all();
        $services = DB::table('employes')->get();
        $employe = DB::table('employes')->find(2);

        return view('employes.index',compact('data','services','employe'))
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
            'date_de_naissance'=> 'required',
            'situation_mat'=> 'required',
            'date_dentre'=> 'required',
            'date_sorti'=> 'required',
            'nombre_de_part'=> 'required',
            'service_id'=> 'required',


        ]);

        $input = $request->all();
        $employe= Employe::all();
        $date = (154263);
        $min_epoch = strtotime($date);
        $rand_epoch = rand($min_epoch,1222222);
        $numero= $employe->matricule=$rand_epoch;
        //dd($employe->matricule);

        DB::table('employes')->insert([
            'matricule' => $numero,
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'date_de_naissance'=> $request->input('date_de_naissance'),
            'situation_mat'=> $request->input('situation_mat'),
            'date_dentre'=> $request->input('date_dentre'),
            'date_sorti'=> $request->input('date_sorti'),
            'nombre_de_part'=> $request->input('nombre_de_part'),
            'service_id'=> $request->input('service_id'),
        ]);
       // $employe = Employe::create($input);

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

    public function massDestroy(MassDestroyUserRequest $request)
    {
        Employe::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

}
