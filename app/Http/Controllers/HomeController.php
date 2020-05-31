<?php

namespace App\Http\Controllers;

use App\result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
//        $this->middleware('admin.guest', ['except' => 'logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $result=result::orderBy('id', 'desc')->take(10)->get();
        // "SELECT results.*,subjects.subject_name FROM results LEFT JOIN subjects ON results.subject_name = subjects.id"
        $result = DB::table('results')->select('results.*','subjects.subject_name')->leftJoin('subjects','results.subject_name','=' ,'subjects.id')->orderBy('results.id', 'desc')->take(10)->get();
        //print_r($result);
        //print_r($result);
        // $sub_id = $result[]->subject_name;
        // print_r($sub_id);
        // exit(); 
//        return view("layouts.app");
        return view('admin-parts.user-list',compact('result'));
    }


}
