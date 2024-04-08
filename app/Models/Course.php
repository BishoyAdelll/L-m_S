<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'instructor_id',
        'visibility',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'enrollments');
    }

    public function quizzes()
    {
        return $this->hasMany(Quizz::class);
    }
}
