<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = ['name', 'category', 'desc'];

    //mendefinisika relasi models student
    public function students(){
        return $this->hasMany(Student::class);
    }
}
