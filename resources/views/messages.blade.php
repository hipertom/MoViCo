@extends('layouts.app')

@section('content')

<h1>Messages</h1>

@if(count($messages) > 0)
  @foreach($messages as $message)
    <div class="row">
      <div class="col-md-12 paper">
        <ul class="list-unstyled">
          <li><b>Name:</b> {{$message->name}}</li>
          <li><b>Email address:</b> {{$message->email}}</li>
          <li><b>Phone number:</b> {{$message->phone}}</li>
          <li><b>Message:</b> {{$message->message}}</li>
        </ul>
      </div>
    </div>
  @endforeach
@endif

@endsection
