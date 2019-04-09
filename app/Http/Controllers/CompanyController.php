<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Auth;
use App\User;
use App\Dot;
use App\Dot_task;
use DB;

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
    $child=$company->dots->where('parent_id','=', $dotId);
   
//выбираем задачи по статусам
    $tasks_status1=DB::table('dot_tasks')->where([
  ['status', '=', '1'],
  ['dot_id', '=', $dotId],
  ['company_id', '=', $id],
])->get();
  $tasks_status2=DB::table('dot_tasks')->where([
  ['status', '=', '2'],
  ['dot_id', '=', $dotId],
  ['company_id', '=', $id],
])->get();
    $tasks_status3=DB::table('dot_tasks')->where([
  ['status', '=', '3'],
  ['dot_id', '=', $dotId],
  ['company_id', '=', $id],
])->get();
    $tasks_status4=DB::table('dot_tasks')->where([
  ['status', '=', '4'],
  ['dot_id', '=', $dotId],
  ['company_id', '=', $id],
])->get();
    $tasks_status5=DB::table('dot_tasks')->where([
  ['status', '=', '5'],
  ['dot_id', '=', $dotId],
  ['company_id', '=', $id],
])->get();



    
    return view('dotIndex', compact($company, $dot))->with([
        'company'=>$company,
        'dot'=>$dot,
        'child'=>$child,
        'tasks_status1'=>$tasks_status1,
        'tasks_status2'=>$tasks_status2,
        'tasks_status3'=>$tasks_status3,
        'tasks_status4'=>$tasks_status4,
        'tasks_status5'=>$tasks_status5,
         ]);
    
}

}
