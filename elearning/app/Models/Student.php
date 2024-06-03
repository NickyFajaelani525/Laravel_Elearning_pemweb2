<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $fillable = ['name','nim','major','class', 'course_id'];



/**
 * 1 to 1:
 * hasone(NamaModelnya)      : table saat ini meminjamkan key
 * belongsTo(NamaModelnya)   : table saat ini meminjam key dari table lain
 * 
 * 1 to M:
 * 
 */

    // mendefinisikan relasi ke model course
    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
