@extends('layouts.app')

@section('content')

<h1>Projects</h1>
<div class="paper">
  <table class="projects-table table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
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
              <td>{{$project->name}}</td>
              <td>{{ str_limit($project->description, $limit = 100, $end = '...') }}</td>
              <td>
                <a href="#" data-toggle="modal" data-target="#{{ $project->id }}imageModal"><i class="fa fa-picture-o"></i></a>
                <div class="modal fade" id="{{ $project->id }}imageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">{{ $project->name }} project image</h4>
                        </div>
                        <div class="modal-body">
                          <img src="/images/uploads/{{ $project->image }}" alt="">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </td>
              <td>

              @forelse($project->links as $link)
                <a href="{{$link->url}}" class="btn btn-xs {{strtolower($link->type->name)}}-link" title="{{$link->type->name}}" target="_blank">
                  <i class="fa"></i>
                </a>
              @empty
                no links
              @endforelse
              
              </td>
              <td><span class="label label-info label-mini">{{ !is_null($project->status)? $project->status->name : "no status"}}</span></td>
              <td class="action-buttons">
                <a href="#" class="btn btn-success btn-xs" title="Publish"><i class="fa fa-check"></i></a>
                <a href="#" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-pencil"></i></a>
                <a href="/project/delete/{{$project->id}}" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('are you sure?')"><i class="fa fa-trash-o "></i></a>
            </td>
        </tr>
      @endforeach
    @endif
    </tbody>
  </table>
</div>

@endsection

