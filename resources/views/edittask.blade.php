@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Edit Your Task</h2>
               
                <form class="d-flex" action="/update/{{ $task->id }}" method="GET">
                    <input type="text" class="form-control me-sm-2" name="editlabel" placeholder="{{ $task->task_body }}">
                    <button type="submit" class="btn btn-primary mx-2">Update</button>
                    <a href="/" class="btn btn-danger">Cancel</a>
                </form>
              
            </div>
        </div>
    </div>
@endsection