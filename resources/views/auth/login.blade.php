@extends('layouts.clean')

@section('content')
<div class="col-md-2 col-md-offset-5 clean-layout-wrapper">
    <form class="clean-layout-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h2 class="form-heading">Login</h2>
        
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
            <label for="username" class="control-label">Username</label>
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus> @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Password</label>

                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
        </div>


        <button type="submit" class="btn submit">
            Login
        </button>
        <div class="bottom">
            <div class="forgot">
                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        
            <div class="remind">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}>Remember Me 
                    </label>
                </div>
            </div> 
        </div>

    </form>
</div>
@endsection
