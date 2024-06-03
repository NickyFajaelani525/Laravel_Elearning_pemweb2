<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //===========================================================method untuk menampilkan halaman student
    public function index(){
        //=======================================================mendapatkan data student dari database
        $students = Student::all();

        //=======================================================panggil view dan kirim data ke view
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }



    //==========================================================method untuk menampilkan halaman form student
    public function create(){
        //mendapatkan data courses
        $courses = Courses::all();
        //=======================================================mengirim data ke view
        return view('admin.contents.student.create',[
            'courses' => $courses
        ]);
    }


    //==========================================================method untuk menyimpan data student
    public function store(Request $request){
        //======================================================validasi yang diterima
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'nullable|numeric',

            
        ]);

     //==============================================================simpan ke database
         Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id
            
        ]);

        //=================================================================================arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan','Berhasil menambahkan data.');
        
    }


    //======================================================================================================================================method untuk menampilkan halaman edit
    public function edit($id){
        //============================================================mendapatkan data student dari id
        $student = Student::find($id); //============================Select * From student where id= $id;
        return view('admin.contents.student.edit',[
            'student' => $student
        ]);

    }


    //===============================================================method untuk menyimpan hasil update
    public function update($id, Request $request){
        //===========================================================cari data student berdasarkan id
        $student = Student::find($id); //=============================SELECT * FROM student WHERE id=$id;
        //============================================================validasi request
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);


        //==========================================================simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);

         //=================================================================================arahkan ke halaman student index
         return redirect('/admin/student')->with('pesan','Berhasil edit data.');


    }

    //==============================================================================================================method untuk menghapus student
    public function destroy($id){
        //============================================================menghapus data student berdasarkan id
        $student = Student::find($id); //===============================DELETE FROM student WHERE id=$id;
        $student->delete();

        //=================================================================================arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan','Berhasil hapus data.');
    }









}