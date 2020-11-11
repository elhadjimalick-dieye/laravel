<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class HomeController extends Controller
{

    public function custumer()
    {
        $customers = Customer::all();
        return view('customers.table', compact('customers'));
    }

    public function getRowDetails()
    {
        return view('customers.row_details');
    }

    public function getMasterDetails()
    {
        return view('customers.master_details');
    }

    public function getColumnSearch()
    {
        return view('customers.column_search');
    }

    public function getRowAttributes()
    {
        return view('customers.row_attributes');
    }

    public function getCarbon()
    {
        return view('customers.carbon');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
