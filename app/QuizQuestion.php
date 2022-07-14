<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionPaper;

class QuizQuestion extends Model
{
    //
    public function questionPaper()
    {
        return $this->belongsTo(QuestionPaper::class, 'question_paper_id');
    }
    

}
