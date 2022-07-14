<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionPaper;
use App\QuizQuestion;

class UserQuestionPaper extends Model
{
    //
    public function questions()
    {
        return $this->belongsTo(QuizQuestion::class,'question_id');
    }

    public function questionPaper()
    {
        return $this->belongsTo(QuestionPaper::class, 'question_paper_id');
    }
    
}
