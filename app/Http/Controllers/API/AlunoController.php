<?php

namespace App\Http\Controllers\API;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Request\AlunoRequest;
use App\Http\Service\AlunoService;

class AlunoController extends Controller
{
    public function index()
    {
        return Aluno::all();
    }

    public function store(Request $request)
    {
        $aluno = AlunoService::store($request->all());

        if ($aluno['status']) {
            return response()->json($aluno, 200);
        }

        return response()->json($aluno, 400);
    }

    public function show($id)
    {
        return Aluno::findOrfail($id);
        //return response()->json($aluno);
    }

    public function update(Request $request, $id)
    {
        $aluno = AlunoService::findOrfail($id);
        $aluno->fill($request>all());
        $aluno->save();
        return response()->json($aluno);
    }

    public function destroy($id)
    {
        $aluno = AlunoService::findOrfail($id);
        $aluno->delete();
        return response()->json(['message'=>'Removido']);
    }
}
