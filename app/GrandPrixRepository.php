<?php

namespace App;

use App\Models\GrandPrix;

class GrandPrixRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new GrandPrix();
    }


    public function all()
    {
        return GrandPrix::all();
    }

    public function get(int $id)
    {
        return $this->model->find($id);
    }

    public function save(GrandPrix $grandprix)
    {
        $grandprix->save();
        return $grandprix;
    }

    public function delete(GrandPrix $grandprix)
    {
        $grandprix->delete();
        return $grandprix;
    }
}
