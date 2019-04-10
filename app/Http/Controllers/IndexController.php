<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
 public function index()
 {
 	return view('index');
 }

 public function companyDot()
 {
 	return view('companyIndex');
 }

 public function registerCompany()
 {
 	return view('registerCompany');
 }


}
