<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller{
    //method untuk menampilkan halaman courses
    public function index(){
        //mendapatkan data courses dari database
        $courses = Courses::all();

        //panggil view dan kirim ke data view
        return view('admin.contents.courses.index', [
            'courses' => $courses
        ]);

    }

    public function create(){
        //panggil view dan kirim ke data view
        return view('admin.contents.courses.create');
    }


    //============================================================method untuk menyimpan data courses
    public function store(Request $request){
        //=============================================================validasi data
        $request->validate([
        'name' => 'required',
        'category' => 'required',
        'desc' => 'required',
    ]);

        //==============================================================simpan ke database
        Courses::create([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc
        ]);

        //=================================================================================arahkan ke halaman COURSES index
        return redirect('/admin/courses')->with('pesan','Berhasil menambahkan data.');


    }

        //===================================================================================method untuk menampilkann hakaman edit
        public function edit($id){
            //mendapatkan data courses dari database
            $courses = Courses::find($id); //============================Select * From courses where id= $id;
            return view('admin.contents.courses.edit',[
            'courses' => $courses
        ]);

        }

         //===============================================================method untuk menyimpan hasil update
    public function update($id, Request $request){
        //===========================================================cari data courses berdasarkan id
        $courses = Courses::find($id); //=============================SELECT * FROM courses WHERE id=$id;
        //============================================================validasi request
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);

         //==========================================================simpan perubahan
         $courses->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc
        ]);

         //=================================================================================arahkan ke halaman courses index
         return redirect('/admin/courses')->with('pesan','Berhasil edit data.');

    }

     //==============================================================================================================method untuk menghapus courses
     public function destroy($id){
        //============================================================menghapus data courses berdasarkan id
        $courses = Courses::find($id); //===============================DELETE FROM courses WHERE id=$id;
        $courses->delete();

        //=================================================================================arahkan ke halaman courses index
        return redirect('/admin/courses')->with('pesan','Berhasil hapus data.');
    }
    















}


