<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    public function inicio(){
        $chart_options = [
            'chart_title' => 'Libros registrados por día',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Libros',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'chart_color' => '65,34,216'
        ];
        $chart_options_cuadernos = [
            'chart_title' => 'Cuadernos registrados por día',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Cuaderno',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'chart_color' => '111,72,226'
        ];
        $chart_options_proveedores = [
            'chart_title' => 'Proveedores registrados por día',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Proveedores',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'chart_color' => '156,109,236'
        ];
        $chart = new LaravelChart($chart_options);
        $chart2 = new LaravelChart($chart_options_cuadernos);
        $chart3 = new LaravelChart($chart_options_proveedores);
        return view('web.index', compact('chart','chart2','chart3'));
    }

}
