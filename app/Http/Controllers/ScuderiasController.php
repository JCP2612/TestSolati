<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ScuderiaRepository;
use Illuminate\Http\Request;
use App\Models\Scuderias;

class ScuderiasController extends Controller
{
    private $scuderiaRepository;


    public function __construct(ScuderiaRepository $scuderiaRepository)
    {
        $this->scuderiaRepository = $scuderiaRepository;
    }

    public function index(Request $request)
    {
        $scuderias = $this->scuderiaRepository->all();
        if ($request->wantsJson()) {
            return response()->json($scuderias);
        }

        return view('list', compact('scuderias'));
    }

    public function show(int $id)
    {
        $scuderias = $this->scuderiaRepository->get($id);
        if ($scuderias) {
            return response()->json($scuderias);
        } else {
            return 'Scuderia no encontrada';
        }
    }

    public function store(Request $request)
    {
        $scuderias = new Scuderias($request->all());
        $scuderias = $this->scuderiaRepository->save($scuderias);

        return response()->json($scuderias);
    }

    public function update(Request $request, Scuderias $id)
    {
        $id->fill($request->all());
        $scuderias = $this->scuderiaRepository->save($id);
        return response()->json($scuderias);
    }

    public function destroy(Scuderias $id)
    {
        $id = $this->scuderiaRepository->delete($id);
        if ($id) {
            // return response()->json($id);
            return 'La scuderia ha sido eliminada';
        } else {
            return 'Scuderia no encontrada';
        }
    }
}
