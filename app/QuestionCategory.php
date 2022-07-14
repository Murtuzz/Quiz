<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuizQuestion;

class QuestionCategory extends Model
{
    //
    function questions()
    {
        return $this->hasMany(QuizQuestion::class,'category_id');
    }
}
