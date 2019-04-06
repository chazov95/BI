<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\User;
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

    $userID = Auth::user()->id;
    $user = User::find($userID);
    $companies=$user->companies()->paginate(1);
    $myC='disabled';
    $allC='';
      /* $userID = Auth::user()->id;*/
      /* $companies = Company::where('user_id', '1')->paginate(1);*/
         return view('home'/*, compact($companies)*/)->with(['companies'=> $companies,
            'my_c'=> $myC,
            'allC' => $allC
        ]);
        
    }

    public function all()
    {
        $myC='';//деактивирует кнопку компании
        $allC='disabled';
       $companies = Company::paginate(2);
         return view('home', compact($companies))->with([
            'companies'=> $companies,
            'my_c'=> $myC,
            'allC' => $allC
        ]);
    }
  
public function companyHome($id)
{
$company=Company::find($id);

    return view('companyIndex', compact($company))->with([
        'company'=>$company
    ]);
}


}
