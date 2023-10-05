<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Services\ProjectService;


class ProjectController extends Controller
{
    public function __construct(private readonly ProjectService $projectService)
    {
    }



    public function listProject()
    {
        $projects = $this->projectService->list();

        return view('listar', ['projects' => $projects]);
    }

    public function createProject()
    {

        return view('project');
    }

    public function recordProject(ProjectRequest $request)
    {
        $data = $request->all();
        $project = $this->projectService->saveProject($data);
        if (!empty($project)) {
            return redirect()->route('listarProjetosDeRota');
        }

        return redirect()->back()->with('danger', 'Ocorreu erro');
    }

    public function delete_method($id)
    {
        $data = $this->projectService->delete($id);
        // dd($data);

        if($data === true){
            return redirect()->route('listarProjetosDeRota');
        }

    }

    public function edit_method($id)
    {
        $data = $this->projectService->buscar($id);

        return view('editProject', ['data' => $data]);
    }

    public function edit_store_method(ProjectRequest $request)
    {
        $requestData = $request->all();

        $dataEnd = $this->projectService->saveEnd($requestData);

        return redirect()->route('listarProjetosDeRota');

    }





}
