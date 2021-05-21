<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\User;
use App\Models\Questions;
use App\Models\ResultsResponse;


class TestController extends Controller
{    

    public function __construct(){

        $this->middleware('admin');
    }


    public function index(){
        return view('Tests.create');
    }

    public function store(){
        $data = request()->validate([
         'title'=>'required',
         'purpose'=>'required'
        ]);

        $data = auth()->user()->tests()->create($data);

        return redirect('/tests/'.$data->id);
    }


    public function show(Test $test){

        $test->load('questions.answers');
        
        return view('Tests.show')->with(['test' => $test]);
    }

    public function results(){

        // return view('Answers.show')->with('users',User::where('admin','=','0')->get());
    }

    public function Loadquestions($id){

      //use the ResultsResponse as model and relationship to fetch results if neccessary
        // dd($respo = ResultsResponse::all());

      //dd( $respo->question);
      
    }
}
