<section class="addProjects">
<h3>Add project</h3>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group @if($errors->has('name')) has-warning @endif">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', null ,['class' => 'form-control', 'placeholder' => 'John Doe'])}}

        @foreach($errors->get('name') as $error)
            <span id="helpBlock2" class="help-block">{{$error}}</span>
        @endforeach
        </div>
        <div class="form-group @if($errors->has('email')) has-warning @endif">
        {{Form::label('email', 'E-Mail')}}
        {{Form::email('email', null, ['class' => 'form-control','placeholder' => 'you@domain.com'])}}
        @foreach($errors->get('email') as $error)
            <span id="helpBlock2" class="help-block">{{$error}}</span>
        @endforeach
        </div>
        <div class="form-group @if($errors->has('phone')) has-warning @endif">
        {{Form::label('phone', 'Phone Number')}}
        {{Form::tel('phone', null, ['class' => 'form-control','placeholder' => '0612345678'])}}
        @foreach($errors->get('phone') as $error)
            <span id="helpBlock2" class="help-block">{{$error}}</span>
        @endforeach
        </div>
        <div class="form-group @if($errors->has('message')) has-warning @endif">
        {{Form::label('message', 'Message')}}
        @foreach($errors->get('message') as $error)
            <span id="helpBlock2" class="help-block">{{$error}}</span>
        @endforeach
        {{Form::textarea('message', null, ['class' => 'form-control', 'rows' => '3','placeholder' => 'John Doe'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}
    {!! Form::close() !!}
</section>