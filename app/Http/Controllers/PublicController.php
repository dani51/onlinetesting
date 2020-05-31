<?php

namespace App\Http\Controllers;

use App\result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        return view("frontPage.main");
    }

    public function joinUs()
    {
        return view("frontPage.main");
    }


}
