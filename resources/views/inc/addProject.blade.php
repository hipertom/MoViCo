<section class="addProjects">
    <h3>Add project</h3>
    {!! Form::open(['url' => 'projects/add', 'files' => 'true']) !!}
        
        <!-- name -->
        <div class="form-group @if($errors->has('name')) has-warning @endif">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', null ,['class' => 'form-control', 'placeholder' => 'John Doe'])}}
        @foreach($errors->get('name') as $error)
            <span id="name" class="help-block">{{$error}}</span>
        @endforeach
        </div>
        
        <!-- Image -->
        <div class="form-group @if($errors->has('image')) has-warning @endif">
        {{Form::label('image', 'Image')}}
        {{Form::file('image')}}
        @foreach($errors->get('image') as $error)
            <span id="image" class="help-block">{{$error}}</span>
        @endforeach
        </div>
        
        
        
        <!-- Description -->
        <div class="form-group @if($errors->has('description')) has-warning @endif">
        {{Form::label('description', 'Description')}}
        @foreach($errors->get('description') as $error)
            <span id="helpBlock2" class="help-block">{{$error}}</span>
        @endforeach
        {{Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3','placeholder' => 'John Doe'])}}
        </div>

        <!-- submit -->
        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}

    {!! Form::close() !!}
</section>