@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>


               @if (Auth::user()->admin)
                   
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/tests/create" class="btn btn-dark">Create New Test</a>
                   
                </div>

                   <div class="card-body">
                     <p class="lead">Tests Available</p>
                     @if ($tests)
                          <ul class="list-group">
                         @foreach ($tests as $test)
                            <li class="list-group-item">
                                <a href="/tests/{{$test->id}}">{{$test->title}}</a>
                            </li>
                        @endforeach
                       </ul>
                     @else
                         No Test Created Yet
                     @endif
                       
                    </div>
                    @endif
                  <hr>
          
              @if (!Auth::User()->admin)
              
                <div class="card-body">
                     <p class="lead">Tests Available</p>
                    <ul class="list-group">
                        @foreach ($tests as $test)
                            <li class="list-group-item">
                                <a href="/results/{{$test->id}}-{{Str::slug($test->title)}}">{{$test->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                    </div>     
              
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
