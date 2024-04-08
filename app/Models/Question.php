<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'quiz_id',
        'text',
        'type',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quizz::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
