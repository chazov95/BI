<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\User;

class CompanyController extends Controller
{

public function __construct()
    {
    	$this->middleware('auth');
        $this->middleware('company:id');
    }

    public function companyHome($id)
{

    //проверяем: есть ли компании с $ID, в которых зарегистрирован пользователь.

    $company=Company::find($id);
   
    return view('companyIndex', compact($company))->with([
        'company'=>$company
    ]);
    
}

}
