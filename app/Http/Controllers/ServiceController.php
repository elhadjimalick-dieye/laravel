<?php

namespace App\Http\Controllers;
use App\Service;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = Service::orderBy('id','DESC')->paginate(10);
        return view('services.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 7);
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
            'libelle' => 'required',
            'direction' => 'required',
         
        ]);


        $input = $request->all();
        $service = Service::create($input);
        return redirect()->route('services.index')
                        ->with('success','Service created successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::pluck('libelle','direction')->all();
        return view('services.create',compact('service'));
    }

       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('services.show',compact('service'));
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->route('employes.index')
                        ->with('success','employe deleted successfully');
    }
    public function massDestroy(MassDestroyUserRequest $request)
    {
        Service::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
