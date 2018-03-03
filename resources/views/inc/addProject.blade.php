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

        <!-- Description -->
        <div class="form-group @if($errors->has('description')) has-warning @endif">
            {{Form::label('description', 'Description')}}
            @foreach($errors->get('description') as $error)
                <span id="helpBlock2" class="help-block">{{$error}}</span>
            @endforeach
            {{Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3','placeholder' => 'John Doe'])}}
        </div>
        
        <!-- Url -->
        <table class="add-link-table">
            <tr>
                <th style="width: 70%;">Url</th>
                <th>Type</th>
            </tr>
            @foreach($linkTypes as $linkType)
            <tr>
                <td>
                    {{Form::text($linkType->id.'-linktype', null ,['class' => 'form-control', 'placeholder' => 'http://'])}}
                    @foreach($errors->get('url') as $error)
                        <span id="url" class="help-block">{{$error}}</span>
                    @endforeach
                </td>
                <td>
                    {{Form::text(null, $linkType->name ,['class' => 'form-control', 'disabled' => 'disabled'])}}
                    @foreach($errors->get('url') as $error)
                        <span id="url" class="help-block">{{$error}}</span>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </table>

        <!-- languages -->
        
        <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
            @foreach($languages as $language)
                <option value="{{ $language->id }}">{{ $language->name }}</option>
            @endforeach
        </select>

        <!-- Image -->
        <div class="form-group @if($errors->has('image')) has-warning @endif">
        {{Form::label('image', 'Select image', ['class' => 'btn btn-default'])}}
        {{Form::file('image', ['class' => 'hidden'])}}
        @foreach($errors->get('image') as $error)
            <span id="image" class="help-block">{{$error}}</span>
        @endforeach
        </div>
        

        <!-- submit -->
        {{Form::submit('Submit', ['class' => 'btn btn-default'])}}

    {!! Form::close() !!}
</section>
