@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{$test->title}}</h3>
            <form action="/results/{{$test->id}}-{{Str::slug($test->title)}}" method="POST">
                @csrf
                @foreach ($test->questions as $key => $question)
                  <div class="card mb-3">
                <div class="card-header"><strong>{{$key+1}}</strong>{{ $question->question}}</div>
                <div class="card-body">

                    @error('responses.'.$key.'.answer_id')
                         <small class="text-danger">{{$message}}</small>
                    @enderror
                     <ul class="list-group">
                    @foreach ($question->answers as $answer)
                      <label for="answer{{$answer->id}}">
                           <li class="list-group-item">
                           <input type="radio" name="responses[{{ $key }}][answer_id]" 
                           id="answer{{$answer->id}}" value="{{$answer->id}}" class="mr-2">
                          
                              {{$answer->answer}}
                            <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{$question->id}}">
                            <input type="hidden" name="responses[{{ $key }}][user_id]" value="{{auth()->id()}}"> 
                        </li> 
                      </label>
                    @endforeach
             
                </ul>
                </div>
            </div>
                    
                @endforeach

                <button type="submit" class="btn btn-dark"> submit results</button>

            </form>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
