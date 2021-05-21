<?php

namespace App\Http\Controllers;
use App\Models\Test;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function show(Test $test){

        $test->load('questions.answers');   

        return view('Results.show',)->with(['test' => $test]);

    }

    public function store(Test $test){

        $data = request()->validate([

            'responses.*.answer_id'=>'required',
            'responses.*.question_id'=>'required',
            'responses.*user_id'=>'required'

        ]);



        
        $data = request()->all();

        $userdata = [];

        $userdata['name'] = auth()->user()->name;

        $userdata['email'] = auth()->user()->email;
       
        $results = $test->results()->create($userdata);

        $results->responses()->createMany($data['responses']);

        return 'successfully submitted';

       
    }
}
