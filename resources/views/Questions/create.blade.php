@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Create New Question</div>
                <div class="card-body">
                    @include('layouts.errors')
                  <form action="/tests/{{$test->id}}/questions" method="POST">
                   @csrf
                   <div class="form-group">
                       <label for="question">Question</label>
                      <input  name="question[question]" type="text" class="form-control" id="question" aria-describedby="question" placeholder="Enter a question">
                       </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>
                                choices
                            </legend>
                            <small id="choicehelp" class="form-text text-muted">Give The Choices</small>
                            <div>
                        <div class="form-group">
                          <label for="answer1">Answer one</label>
                          <input  name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="choicehelp" placeholder="Enter Choice one">
                          <small id="answer1" class="form-text text-muted"></small>
                       </div>

                       <div class="form-group">
                          <label for="answer2">Answer Two</label>
                          <input  name="answers[][answer]" type="text" class="form-control" id="answer2" aria-describedby="choicehelp" placeholder="Enter Choice two">
                          <small id="answer2" class="form-text text-muted"></small>
                       </div>

                       <div class="form-group">
                          <label for="answer3">Answer Three</label>
                          <input  name="answers[][answer]" type="text" class="form-control" id="answer3" aria-describedby="choicehelp" placeholder="Enter Choice three">
                          <small id="answer3" class="form-text text-muted"></small>
                       </div>

                       <div class="form-group">
                          <label for="answer4">Answer four</label>
                          <input  name="answers[][answer]" type="text" class="form-control" id="answer4" aria-describedby="choicehelp" placeholder="Enter Choice four">
                          <small id="answer4" class="form-text text-muted"></small>
                       </div>

                            </div>
                        </fieldset>
                    </div>
                       <button type="submit" class="btn btn-primary">Add Question</button>

                   </form>

                    {{-- <a href="/tests" class="btn btn-dark">Create New Test</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
