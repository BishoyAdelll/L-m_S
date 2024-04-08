<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use HasFactory;

    protected $table='quizzes';
    protected $fillable=[
        'title',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public  function Questions()
    {
        return $this->hasMany(Question::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
