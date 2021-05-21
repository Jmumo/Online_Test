<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create(Test $test){

        return view('Questions.create',compact('test'));
    }

    public function store(Test $test){

        $data = request()->validate([
            'question'=>'required',
            'answers.*.answer'=>'required'
        ]);

        $question = $test->questions()->create($data['question']);

        $question->answers()->createMany($data['answers']);

        return redirect('/tests/'.$test->id);

    }

    public function destroy(Test $test,Question $question){

             $question->answers()->delete();

             $question->delete();

             return redirect('/tests/'.$test->id);
    }
}
