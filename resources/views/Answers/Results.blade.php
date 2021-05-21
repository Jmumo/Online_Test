@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                 @foreach ($users as $user)
                    <a href="/questions/results/{{$user->id}}"><li>{{$user->name}}</li></a>
                 @endforeach
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
