<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ScuderiaRepository;
use Illuminate\Http\Request;
use App\Models\Scuderias;
use Illuminate\Types\Relations\Image;

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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $scuderias = $this->scuderiaRepository->save($scuderias, $image);
        } else {
            $scuderias->save();
        }

        return response()->json($scuderias);
    }

    public function update(Request $request, Scuderias $id)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('scuderias');

        $image = new Image;
        $image->path = $imagePath;
        $id->image()->save($image);

        $id->fill($request->except('image'));
        $scuderias = $this->scuderiaRepository->save($id, $image);
        return response()->json([
            'scuderia' => $scuderias,
            'image_url' => asset('storage/' . $imagePath)
        ]);
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
