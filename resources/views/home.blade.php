@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-2 col-md-offset-1 box-holder">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num" id="ganumber">{{$file}}</span>
            </div>
            <span class="subtext">Visitors last week</span>
        </a>
    </div>

    <div class="col-md-2 box-holder">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
            <span class="subtext">Visitors last week</span>
        </a>
    </div>
    
    <div class="col-md-2 box-holder">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
            <span class="subtext">Visitors last week</span>
        </a>
    </div>

    <div class="col-md-2 box-holder">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
            <span class="subtext">Visitors last week</span>
        </a>
    </div>

    <div class="col-md-2 box-holder">
        <a href="#">
            <div class="box">
                <span class="icon"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                <span class="num">420</span>
            </div>
            <span class="subtext">Visitors last week</span>
        </a>
    </div>

</div> <!-- /row -->


@endsection