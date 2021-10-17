@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1>Hello, {{ Auth::user()->name }}</h1>
           <p>Here's Your Tasks...</p>
           <hr class="my-4">
           <form class="d-flex" action="/create-task" method="GET">
            <input class="form-control me-sm-2" type="text" name="taskname" placeholder="Enter your task...">
            <button class="btn btn-success mx-2 " type="submit">Create</button>
          </form>
          <hr class="my-4">
          @if(count($tasks)>0)
          <table class="table table-hover">
              <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Task Body</th>
                    <th scope="col">Actions</th>
                    
                  </tr>
              </thead>
              <tbody>
                
                  @foreach ($tasks as $todo)
                  <tr class="table-primary">
                    <th scope="row">#</th>
                    <td>{{ $todo->task_body }}</td>
                    <td><a href="/edit/{{ $todo->id }}" class="btn btn-dark">Edit</a> || <a href="/delete/{{$todo->id}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                
              </tbody>
          </table>
                 @else
                  <p>No Record Found</p>
                @endif
        </div>
    </div>
</div>
@endsection
