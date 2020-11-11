<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Service;
use App\Roles;

use Spatie\Permission\Models\Role;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
    * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        //$services = Service::pluck('libelle','libelle')->all();
        //$roles = Roles::pluck('name','name')->all();
        $roles = DB::table('users')->get();
        $services = DB::table('users')->get();
        $user = DB::table('users')->find(2);

        return view('users.index',compact('data','services','roles','user'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
            

    }

    public function list(){
        $activeUser = User::active()->get();
        $inactiveUser = User::inactive()->get();
      
        $roles = Roles::pluck('name','name')->all();
        $services['services']= Service::all();
        //$services =Service::all();

        return view('internals.users',service('activeUser','inactiveUser','services','roles')->with($services));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $services =Service::all();
        $roles =Role::all();

        return view('users.create',compact('roles','services'));
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
            'name' => 'required',
            'prenom' => 'required',
            'statut' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
            'service_id'=> 'required',


        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        //$user->assignRole($request->input('roles'));
        return redirect()->route('users.index',compact('user'))
                        ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
      
        $roles =Role::all();
        $services =Service::all();



        return view('users.edit',compact('user','roles','services'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editservice($id)
    {
        $user = User::find($id);
        $service = Service::pluck('name','name')->all();
        $userService = $user->service->pluck('name','name')->all();


        return view('users.edit',compact('user','services','userService'));
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
            'name' => 'required',
           //'prenom' => 'required',
            //'statut' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required',
            'service_id'=> 'required',


        ]);


        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}