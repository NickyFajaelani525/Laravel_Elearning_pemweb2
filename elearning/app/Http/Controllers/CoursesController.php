<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //method untuk menampilkan halaman courses
    public function index(){
        //mendapatkan data courses dari database
        $courses = Courses::all();

        //panggil view dan kirim ke data view
        return view('admin.contents.courses.index', [
            'courses' => $courses
        ]);

    }

    public function form(){
        //mendapatkan data courses dari database
        $courses = Courses::all();

        //panggil view dan kirim ke data view
        return view('admin.contents.courses.form', [
            'courses' => $courses
        ]);

    }
}
