@extends('layouts.clean')

@section('content')
<div class="col-md-2 col-md-offset-5 login-wrapper">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h2 class="form-heading">Login</h2>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
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
