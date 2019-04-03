<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;


class HomeController extends Controller
{
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
       
        $companies = Company::select(['id', 'name', 'description_short', 'logo'])->get();
         return view('home')->with(['companies'=> $companies
     ]);
        

    }
  
}
