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
        return $this->model->find($id);
    }

    public function save(Scuderias $scuderias, $image)
    {
        $scuderias->save();
        if ($image) {
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('storage'), $imageName);
            $scuderias->images()->create([
                'path' => 'storage/' . $imageName,
                'name' => $imageName
            ]);
        }
        return $scuderias;
    }

    public function delete(Scuderias $scuderias)
    {
        $scuderias->delete();
        return $scuderias;
    }
}
