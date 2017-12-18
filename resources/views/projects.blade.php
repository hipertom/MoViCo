@extends('layouts.app')

@section('content')

<h1>Projects</h1>
<div class="paper">
  <table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Url</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
      @if(count($projects) > 0)
      @foreach($projects as $project)
        <tr>
              <td>{{ !is_null($project->order)? $project->order : "no order"  }}</td>
              <td>{{$project->name}} image: '{{$project->image}}'</td>
              <td>{{ str_limit($project->description, $limit = 100, $end = '...') }}</td>
              <td>
              @foreach ($project->links as $link)
                <a href="{{$link->url}}" class="btn btn-success btn-xs" title="{{$link->type->name}}" target="_blank">
                  <i class="fa fa-paper-plane"></i>
                </a>
                
              @endforeach
              </td>
              <td><span class="label label-info label-mini">{{ !is_null($project->status)? $project->status->name : "no status"}}</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
            </td>
        </tr>
      @endforeach
    @endif
    </tbody>
  </table>
</div>

@endsection

@section('rightsidebar')
    @include('inc.addproject')
    @parent
@endsection