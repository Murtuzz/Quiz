<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionCategory;
use App\User;

class QuestionPaper extends Model
{
    //
    function category()
    {
        return $this->hasMany(QuestionCategory::class, 'category_id');
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
    
    function questions()
    {
        return $this->belongsToMany(QuizQuestion::class, 'user_question_papers', 'question_paper_id', 'question_id')
                        ->withPivot('user_answer');
    }
}
