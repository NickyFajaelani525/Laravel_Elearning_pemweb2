<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //methdo untuk menampilkan dashboard
   
    public function index() {
        return view('admin/contents.dashboard.index');


    }


}
