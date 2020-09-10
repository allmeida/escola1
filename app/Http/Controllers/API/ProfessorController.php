<?php

namespace App\Http\Controllers\API;

use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Request\ProfessorRequest;
use App\Http\Service\ProfessorService;

class ProfessorController extends Controller
{
    public function index()
    {
        return Professor::all();
    }

    public function store(Request $request)
    {
        $professor = ProfessorService::store($request->all());

        if ($professor['status']) {
            return response()->json($professor, 200);
        }

        return response()->json($professor, 400);
    }

    public function show($id)
    {
        return Professor::findOrfail($id);
    }

    public function update(Request $request, $id)
    {
        $professor = ProfessorService::findOrfail($id);
        $professor->fill($request>all());
        $professor->save();
        return response()->json($professor);
    }

    public function destroy($id)
    {
        $professor = ProfessorService::findOrfail($id);
        $professor->delete();
        return response()->json(['message'=>'Removido']);
    }
}
