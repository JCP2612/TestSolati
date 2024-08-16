<?php

namespace App;

use App\Models\Scuderias;

class ScuderiaRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Scuderias();
    }


    public function all()
    {
        return Scuderias::all();
    }

    public function get(int $id)
    {
        return $this->model->with(['scuderias'])->find($id);
    }

    public function save(Scuderias $scuderias)
    {
        $scuderias->save();
        return $scuderias;
    }

    public function delete(Scuderias $scuderias)
    {
        $scuderias->delete();
        return $scuderias;
    }
}
