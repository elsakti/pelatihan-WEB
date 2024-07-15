<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiProjectController extends Controller
{
    public function index()
    {
        $dataProjects = Project::all(['id', 'judul', 'keterangan', 'alasan']);

        return response()->json([

            'dataJSON' => $dataProjects

        ], 200 );
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:projects',
            'keterangan' => 'required',
            'alasan' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->messages()
            ], 422 );
        }
        $dataProject = Project::create($request->all());
        return response()->json([
            'dataJSON' => $dataProject
        ], 201);
    }

    public function show($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['error' => 'Data Tidak Ditemukan'], 404);
        }

        return response()->json(['dataJSON' => $project], 200);

    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['error' => 'Data Tidak Ditemukan'], 404);
        }

        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:projects,judul,' . $id . 'ID',
            'keterangan' => 'required',
            'alasan' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->messages()
            ], 422 );
        }

        $project->update($request->all());

        return response()->json(['dataJSON' => $project], 200);

    }

    public function destroy($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['error' => 'Data Tidak Ditemukan'], 404);
        }

        $project->delete();

        return response()->json(['message' => 'Data Berhasil Dihapus'], 200);

    }
}
