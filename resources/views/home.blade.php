@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2 col-md-offset-1">
        <a href="#">
            <div class="box" data-toggle="tooltip" data-placement="bottom" title="Number of visitors last week">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num" id="ganumber">{{$file}}</span>
            </div>
        </a>
    </div>

    <div class="col-md-2">
    <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
        </a>
    </div>

    <div class="col-md-2">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
        </a>
    </div>

    <div class="col-md-2">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
        </a>
    </div>

    <div class="col-md-2">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
        </a>
    </div>
</div>


@endsection