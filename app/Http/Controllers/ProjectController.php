<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects.index',[
            'background_color' => 'blue',
            'title' => 'Project Saya',
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return view('pages.projects.create',[
            'background_color' => 'blue',
            'title' => 'Tambahkan Data'
        ]);
    }

    public function destroy($id)
    {
        $project =  Project::find($id);

        $project->delete();

        return redirect()->route('project_index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:projects',
            'keterangan' => 'required',
            'alasan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('project_create')
            ->with('errors', 'Input tidak valid');
        }

        $validatedData = $validator->validated();

        Project::create($validatedData);

        return redirect()->route('project_index')
        ->with('success', 'Project Baru Telah Ditambahkan');

    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('pages.projects.edit',[
            'project' => $project,
            'title' => 'Edit Project',
            'background_color' => 'blue'
        ]);
    }

    public function update(Request $request, string $id)
    {
        $project = Project::find($id);

        $validator = Validator::make($request->all(), [
            'judul' => 'required|unique:projects,judul,' . $id . 'ID' ,
            'keterangan' => 'required',
            'alasan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', 'Input tidak valid');
        }

        $validatedData = $validator->validated();

        $project->update($validatedData);

        return redirect()->route('project_index')->with('success' , 'Data Project telah diperbarui');

    }





    public function home()
    {
        return view('pages.home', [
            'background_color' => 'red',
            'title' => 'Halaman Utama'
        ]);
    }

    public function about()
    {
        $nama = 'Rakha Bagus';
        return view('pages.about',[
            'nama_about' => $nama,
            'background_color' => 'green',
            'title'=>'Tentang Saya'
        ]);
    }





}
