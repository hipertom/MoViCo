@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Contact</h1>
    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="John Doe">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="you@domain.com">
      </div>
      <div class="form-group">
        <label for="phone">Phone number</label>
        <input type="tel" class="form-control" id="phone" placeholder="+31 6 555 69 777">
      </div>
      <div class="form-group">
        <label for="question">Question</label>
        <textarea class="form-control" rows="3" id="question" placeholder="How big is the universe?"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>


@endsection
