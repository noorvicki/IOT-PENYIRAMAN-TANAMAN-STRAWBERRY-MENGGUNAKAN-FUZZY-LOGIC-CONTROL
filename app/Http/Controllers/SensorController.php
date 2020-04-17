<?php

namespace App\Http\Controllers;

use App\DataTables\SensorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSensorRequest;
use App\Http\Requests\UpdateSensorRequest;
use App\Repositories\SensorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SensorController extends AppBaseController
{
    /** @var  SensorRepository */
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
    public function index(SensorDataTable $sensorDataTable)
    {
        return $sensorDataTable->render('sensors.index');
    }

    /**
     * Show the form for creating a new Sensor.
     *
     * @return Response
     */
    public function create()
    {
        return view('sensors.create');
    }

    /**
     * Store a newly created Sensor in storage.
     *
     * @param CreateSensorRequest $request
     *
     * @return Response
     */
    public function store(CreateSensorRequest $request)
    {
        $input = $request->all();

        $sensor = $this->sensorRepository->create($input);

        Flash::success('Sensor saved successfully.');

        return redirect(route('sensors.index'));
    }

    /**
     * Display the specified Sensor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sensor = $this->sensorRepository->find($id);

        if (empty($sensor)) {
            Flash::error('Sensor not found');

            return redirect(route('sensors.index'));
        }

        return view('sensors.show')->with('sensor', $sensor);
    }

    /**
     * Show the form for editing the specified Sensor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sensor = $this->sensorRepository->find($id);

        if (empty($sensor)) {
            Flash::error('Sensor not found');

            return redirect(route('sensors.index'));
        }

        return view('sensors.edit')->with('sensor', $sensor);
    }

    /**
     * Update the specified Sensor in storage.
     *
     * @param  int              $id
     * @param UpdateSensorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSensorRequest $request)
    {
        $sensor = $this->sensorRepository->find($id);

        if (empty($sensor)) {
            Flash::error('Sensor not found');

            return redirect(route('sensors.index'));
        }

        $sensor = $this->sensorRepository->update($request->all(), $id);

        Flash::success('Sensor updated successfully.');

        return redirect(route('sensors.index'));
    }

    /**
     * Remove the specified Sensor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sensor = $this->sensorRepository->find($id);

        if (empty($sensor)) {
            Flash::error('Sensor not found');

            return redirect(route('sensors.index'));
        }

        $this->sensorRepository->delete($id);

        Flash::success('Sensor deleted successfully.');

        return redirect(route('sensors.index'));
    }
}
