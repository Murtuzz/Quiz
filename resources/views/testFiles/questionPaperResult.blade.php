@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Result of <strong>{{$question_paper->slug}}</strong></div>
                    @foreach ($result as $key => $question)
                        <div class="card-body" style="padding-top: .5em; padding-bottom: .5em;">
                            <p><span style="margin-right:.2em; font-weight: bold;">Q.{{$key + 1}}</span>{{$question->question}}</p>
                            <p>Your Answer: {{$question->your_answer}}</p>
                            <p>Correct Answer: {{$question->answer}}</p>
                            @if($question->correct)
                                <p>Correct!</p>
                            @else
                                <p>Incorrect!</p>
                            @endif
                        </div>
                    @endforeach
                <div class="card-body">
                    <p>You scored {{$point}} out of 10 Questions</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection