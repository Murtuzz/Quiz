<?php

namespace App\Http\Controllers;

use App\QuestionPaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\QuestionCategory;
use App\QuizQuestion;

class QuestionPaperController extends Controller
{
    function __constructor()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'category' => 'required|integer',
            ]
        );
        $category = QuestionCategory::findOrFail($request->category);
        $questions = QuizQuestion::where('category_id',$category->id)->inRandomOrder()->take(10)->get(); 
        $question_paper = new QuestionPaper();
        $question_paper->user_id = auth()->user()->id;
        $question_paper->slug = rand(10000,100000).'_'.$category->name.'_'.rand(10000,100000);
        $question_paper->category_id = $category->id;
        $question_paper->save();

        foreach($questions as $question)
        {
            $question_paper->questions()->attach($question->id);
        }

        $question_paper->save();
        
        return view('testFiles.questionPaper',['question_paper' => $question_paper,
                                                'questions' => $questions,
                                                'category' => $category]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $question_paper = QuestionPaper::findOrFail($request->question_paper_id);
        $resultAndPoint = $this->calculateTestResult($question_paper->questions);
        return view('testFiles.questionPaperResult',['question_paper' => $question_paper,
                                                'result' => $resultAndPoint['result'],
                                                'point' => $resultAndPoint['point']]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionPaper  $questionPaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questionPaperId)
    {
        $question_paper = QuestionPaper::findOrFail($questionPaperId);
        foreach($request->all() as $key => $value)
        {   if(is_numeric($key) )
                $question_paper->questions()->updateExistingPivot($key, ['user_answer' => $value]);
        }
        $question_paper->save();
        $resultAndPoint = $this->calculateTestResult($question_paper->questions);

        return view('testFiles.questionPaperResult',['question_paper' => $question_paper,
                                                'result' => $resultAndPoint['result'],
                                                'point' => $resultAndPoint['point']]);
    }

    public function calculateTestResult($questions){
        $result = array();
        $point = 0;
        foreach($questions as $question)
        {
            Log::info($question->pivot->user_answer);
            if($question->pivot->user_answer == $question->answer){
                $result[] = (object)array(
                            'question' => $question->question, 
                            'answer' => $question->answer,
                            'your_answer' => $question->pivot->user_answer, 
                            'correct' => true
                        );
                $point++;                
            }
            else {
                $result[] = (object)array(
                    'question' => $question->question, 
                    'answer' => $question->answer,
                    'your_answer' => $question->pivot->user_answer, 
                    'correct' => false
                ); 
            }
        }
        return array(
            'result' => $result,
            'point' => $point
        );
    }
}
