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

    public function index()
    {
        $scuderias = $this->scuderiaRepository->all();
        return view('list', compact('scuderias'));
        // return response()->json($scuderias);
    }

    public function show(int $id)
    {
        $scuderias = $this->scuderiaRepository->get($id);
        return response()->json($scuderias);
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
        return response()->json($id);
    }
}
