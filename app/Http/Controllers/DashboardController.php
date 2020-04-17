<?php

namespace App\Http\Controllers;

use App\Charts\KelembabanChart;
use App\Charts\PhChart;
use App\DataTables\SensorDataTable;
use App\Repositories\SensorRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Sensor;
use Response;
use Illuminate\Http\Request;

class DashboardController extends Controller
{    /** @var  SensorRepository */
    private $sensorRepository;

    public function __construct(SensorRepository $sensorRepo)
    {
        $this->sensorRepository = $sensorRepo;
    }

    /**
     * Display a listing of the Sensor.
     *
     * @param SensorDataTable $sensorDataTable
     * @return Response
     */
    public function index(SensorDataTable $sensorDataTable){
        $Sensor=Sensor::all();
        $grafikSensor=Sensor::limit(20)->get();
        $created=array();
        $ph=array();
        $kelembaban=array();
        $data=array();
        $total=Sensor::all()->count();
        $meanPH=Sensor::all()->avg('ph');
        $meanKelembaban=Sensor::all()->avg('kelembaban');
        $maxPH=Sensor::all()->max('ph');
        $maxKelembaban=Sensor::all()->max('kelembaban');
        $minPH=Sensor::all()->min('ph');
        $minKelembaban=Sensor::all()->min('kelembaban');

        foreach($grafikSensor as $grafikSensor)
        {
            array_push($created,$grafikSensor->created_at);
            array_push($ph,$grafikSensor->ph);
            array_push($kelembaban,$grafikSensor->kelembaban);
        }
        $kelembabanChart = new KelembabanChart;
        $kelembabanChart->barwidth(0.0);
        $kelembabanChart->displaylegend(false);
        $kelembabanChart->labels($created);
        $kelembabanChart->dataset('Users by trimester', 'line',$kelembaban)
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)")
            ->fill(false)
            ->linetension(0.1);

        $phChart = new PhChart;
        $phChart->barwidth(0.0);
        $phChart->displaylegend(false);
        $phChart->labels($created);
        $phChart->dataset('Users by trimester', 'line',$ph)
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)")
            ->fill(false)
            ->linetension(0.1);
            $data["maxPH"] = $maxPH;
            $data["maxKelembaban"] = $maxKelembaban;
            $data["minPH"] = $minPH;
        $data["minKelembaban"] = $minKelembaban;

            $data["meanPH"] = $meanPH;
            $data["meanKelembaban"] = $meanKelembaban;
            $data["total"] = $total;
            $data["phChart"] = $phChart;
            $data["kelembabanChart"] = $kelembabanChart;

        return $sensorDataTable->render('dashboard.dashboard',['data' => $data]);

    }
}
