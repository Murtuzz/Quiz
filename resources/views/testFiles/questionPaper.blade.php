@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Question for Category name <strong>{{$category->name}}</strong></div>
                <form action="{{ action('QuestionPaperController@update', $question_paper->id) }}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    @foreach ($questions as $key => $question)
                        <div class="card-body" style="padding-top: .5em; padding-bottom: .5em;">
                            <p><span style="margin-right:.2em; font-weight: bold;">Q.{{$key + 1}}</span>{{$question->question}}</p>
                            <input type="radio" 
                                name="{{$question->id}}" 
                                    value="{{$question->option_a}}">
                                        {{$question->option_a}}<br>
                            <input type="radio"
                                name="{{$question->id}}" 
                                    value="{{$question->option_b}}">
                                        {{$question->option_b}}<br>
                            <input type="radio"
                                name="{{$question->id}}" 
                                    value="{{$question->option_c}}">
                                        {{$question->option_c}}<br>
                            <input type="radio"
                                name="{{$question->id}}" 
                                    value="{{$question->option_d}}">
                                        {{$question->option_d}}<br>
                        </div>
                    @endforeach
                    @csrf
                    <input style="  
                            padding: 0.2em 0.5em;
                            margin: 0.5em 0.7em;
                            float: right;
                            border-radius: 0.5em;
                            font-size: large;" type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection