<?php

namespace App\Http\Controllers\API;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Request\CursoRequest;
use App\Http\Service\CursoService;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function store(Request $request)
    {
        $curso = CursoService::store($request->all());

        if ($curso['status']) {
            return response()->json($curso, 200);
        }

        return response()->json($curso, 400);
    }

    public function show($id)
    {
        return Curso::findOrfail($id);
    }

    public function update(Request $request, $id)
    {
        $curso = CursoService::findOrfail($id);
        $curso->fill($request>all());
        $curso->save();
        return response()->json($curso);
    }

    public function destroy($id)
    {
        $curso = CursoService::findOrfail($id);
        $curso->delete();
        return response()->json(['message'=>'Removido']);
    }
}
