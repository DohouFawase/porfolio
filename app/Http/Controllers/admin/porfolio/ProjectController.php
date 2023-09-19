<?php

namespace App\Http\Controllers\admin\porfolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ProjectFormRequest;
use App\Models\admin\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('admin.project.index', [
            "projects" => Project::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $project = new Project();

        return view('admin.project.form', [
            "project" => $project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectFormRequest $request)
    {
        //
        $validateData = $request->validated();
        $project = Project::create($validateData);
        return to_route('admin.project.index')->with("success", "New Project add succesfyly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view('admin.project.form', [
            "project" => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectFormRequest $request, Project $project)
    {
        //
        $validateData= $request->validated();
        $project->update($validateData);
        return to_route('admin.project.index')->with('success', "Your project is Modifier Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
