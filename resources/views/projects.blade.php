@extends('layouts.app')

@section('content')

<h1>Messages</h1>

@if(count($projects) > 0)
  @foreach($projects as $project)
    <div class="row">
      <div class="col-md-12 paper">
        <ul class="list-unstyled">
          <li><b>Name:</b> {{$project->name}}</li>
          <li><b>cms:</b> {{$project->cms}}</li>
        </ul>
      </div>
    </div>
  @endforeach
@endif

@endsection
