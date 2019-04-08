<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\User;
use App\Dot;

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
    $mainDots=$company->dots->where('parent_id','=', '0');
    return view('companyIndex', compact($company))->with([
        'company'=>$company,
        'mainDots'=>$mainDots,
    ]);

}
    

    public function dotIndex($id, $dotId)
{

    

    $dot=Dot::find($dotId);
    $company=Company::find($id);
    dump($company);
    return view('dotIndex', compact($dot, $company));
    
}

}
