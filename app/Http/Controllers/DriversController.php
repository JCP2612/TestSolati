<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\DriverRepository;
use Illuminate\Http\Request;
use App\Models\Drivers;
use PhpParser\Node\Expr\FuncCall;

class DriversController extends Controller
{
    private $driverRepository;

    public function __construct(DriverRepository $driverRepository)
    {
        $this->driverRepository = $driverRepository;
    }

    public function index(Request $request)
    {
        $drivers = $this->driverRepository->all();
        if ($request->wantsJson()) {
            return response()->json($drivers);
        }
        return response()->json($drivers);
    }

    public function show(int $id)
    {
        $drivers = $this->driverRepository->get($id);
        if ($drivers) {
            return response()->json($drivers);
        } else {
            return 'Piloto no encontrado';
        }
    }

    public function store(Request $request)
    {
        $drivers = new Drivers($request->all());
        $drivers = $this->driverRepository->save($drivers);
        return response()->json($drivers);
    }

    public function update(Request $request, Drivers $id)
    {
        $id->fill($request->all());
        $drivers = $this->driverRepository->save($id);
        return response()->json($drivers);
    }

    public function destroy(Drivers $id)
    {
        $id = $this->driverRepository->delete($id);
        if ($id) {
            return 'El piloto ha sido eliminado';
        } else {
            return 'Piloto no encontrado';
        }
    }
}
