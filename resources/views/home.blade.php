@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <h2>Select Category to Start Test</h2>

                    <form action="{{ action('QuestionPaperController@store') }}" method="post">
                        @csrf
                        <select name="category" id="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="submit"/>
                    </form>

                </div>
                <div style="margin-top: 2em;" class="card-body">
                    <h2>Select Previous Test Result</h2>
                        <form action="{{ action('QuestionPaperController@show') }}" method="post">
                            @csrf
                            <select name="question_paper_id" id="question_paper">
                                @foreach($question_papers as $question_paper)
                                <option value="{{ $question_paper->id }}">{{ $question_paper->slug }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="submit"/>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
