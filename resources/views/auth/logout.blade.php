@extends('layouts.clean')

@section('content')
<div class="col-md-2 col-md-offset-5 clean-layout-wrapper">
    <form id="logout-form" class="clean-layout-form" action="{{ route('logout') }}" method="POST">
        <h2 class="form-heading">{{ Auth::user()->name}}</h2>
        {{ csrf_field() }}
        <button type="submit" class="btn submit">Logout</button>
    </form>
</div>
@endsection
