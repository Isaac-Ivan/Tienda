@extends('layouts.admin-app')
@section('content-app')
    <h1>Dashboard</h1>
    <div class="container border border-2 ">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-5 border border-1  bg-graficas">
                <h3>{{ $chart->options['chart_title'] }}</h3>
                {!! $chart->renderHtml() !!}
            </div>
            <div class="col-sm-5 border border-1 bg-graficas">
                <h3>{{ $chart2->options['chart_title'] }}</h3>
                {!! $chart2->renderHtml() !!}
            </div>
        </div>
        <div class="row d-flex justify-content-center ">
            <div class="col-sm-5 border border-1   bg-graficas" >
                <h3>{{ $chart3->options['chart_title'] }}</h3>
                {!! $chart3->renderHtml() !!}
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}

    {!! $chart2->renderChartJsLibrary() !!}
    {!! $chart2->renderJs() !!}

    {!! $chart3->renderChartJsLibrary() !!}
    {!! $chart3->renderJs() !!}
@endsection
