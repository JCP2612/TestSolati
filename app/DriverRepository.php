<?php

namespace App;

use App\Models\Drivers;

class DriverRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Drivers();
    }


    public function all()
    {
        return Drivers::all();
    }

    public function get(int $id)
    {
        return $this->model->find($id);
    }

    public function save(Drivers $drivers)
    {
        $drivers->save();
        return $drivers;
    }

    public function delete(Drivers $drivers)
    {
        $drivers->delete();
        return $drivers;
    }
}
