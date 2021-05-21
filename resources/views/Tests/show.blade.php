@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ $test->title}}</div>
                <div class="card-body">
                <a href="/tests/{{$test->id}}/questions/create" class="btn btn-dark">Add Question</a> 
                <a href="/results/{{$test->id}}-{{Str::slug($test->title)}}" class="btn btn-dark">Take Test</a>  
                </div>
            </div>

            @foreach ($test->questions as $question)
                  <div class="card mb-3">
                <div class="card-header text-center">{{ $question->question}}</div>
                <div class="card-body">
                     <ul class="list-group">
                    @foreach ($question->answers as $answer)
                       <li class="list-group-item">
                              {{$answer->answer}}
                        </li> 
                    @endforeach
             
                </ul>
                </div>
                 <div class="card-footer">
                        <form action="/tests/{{$test->id}}/questions/{{$question->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">delete</button>
                        </form>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
