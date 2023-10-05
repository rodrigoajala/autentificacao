<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{
    public function saveProject(array $project)
    {
        $saveProject = Project::create([
            'title' => $project['title'],
            'deadLine' => $project['deadline'],
            'user_id' => $project['user_id'],
        ]);

        return $saveProject;
    }

    public function list()
    {
        return Project::with('user')->get();
    }

    public function delete($id)
    {
        Project::destroy($id);
       return true;
    }

    public function buscar($id)
    {
         return Project::find($id);


    }

    public function saveEnd(array $requestData)
    {

        $project = Project::find($requestData['id']);
        $project->title = $requestData['title'];
        $project->deadLine = $requestData['deadline'];
        $project->save();

        return true;

    }


}
