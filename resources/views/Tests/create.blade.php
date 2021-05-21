@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Create New Test</div>
                <div class="card-body">
                    @include('layouts.errors')
                  <form action="/tests" method="POST">
                   @csrf
                   <div class="form-group">
                       <label for="title">Title</label>
                      <input  name="title" type="text" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
                          <small id="title" class="form-text text-muted"></small>
                       </div>
                       <div class="form-group">
                       <label for="purpose">Purpose</label>
                      <input  name="purpose" type="text" class="form-control" id="Purpose" aria-describedby="Purpose" placeholder="Enter Purpose">
                          <small id="purpose" class="form-text text-muted"></small>
                       </div>
                       <button type="submit" class="btn btn-primary">Add Test</button>

                   </form>

                    {{-- <a href="/tests" class="btn btn-dark">Create New Test</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
