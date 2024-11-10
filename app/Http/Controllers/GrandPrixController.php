<?php

namespace App\Http\Controllers;

use App\GrandPrixRepository;
use App\Http\Controllers\Controller;
use App\Models\GrandPrix;
use Illuminate\Http\Request;

class GrandPrixController extends Controller
{
    private $grandprixRepository;

    public function __construct(GrandPrixRepository $grandPrixRepository)
    {
        $this->grandprixRepository = $grandPrixRepository;
    }

    public function index(Request $request)
    {
        $grandprix = $this->grandprixRepository->all();
        if ($request->wantsJson()) {
            return response()->json($grandprix);
        }
        return response()->json($grandprix);
    }

    public function show(int $id)
    {
        $grandprix = $this->grandprixRepository->get($id);
        if ($grandprix) {
            return response()->json($grandprix);
        } else {
            return 'Circuito no encontrado';
        }
    }

    public function store(Request $request)
    {
        $grandprix = new GrandPrix($request->all());
        $grandprix = $this->grandprixRepository->save($grandprix);
        return response()->json($grandprix);
    }

    public function update(Request $request, GrandPrix $id)
    {
        $id->fill($request->all());
        $grandprix = $this->grandprixRepository->save($id);
        return response()->json($grandprix);
    }

    public function destroy(GrandPrix $id)
    {
        $id = $this->grandprixRepository->delete($id);
        if ($id) {
            return 'El circuito ha sido eliminado';
        } else {
            return 'Circuito no encontrado';
        }
    }
}
