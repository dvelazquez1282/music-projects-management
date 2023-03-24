<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use LaravelApiFactory\Helpers\PaginationHelper;


class ProjectController extends Controller
{
    public function show($id) {
        $model = Project::findOrFail($id);
        $resource = new ProjectResource($model);
        return response()->json($resource);
    }
    public function index() {
        PaginationHelper::addTotalElements(Project::class);
        $models = Project::get();
        $resource = new ProjectCollection($models);
        return response()->json($resource);
    }
    public function store(ProjectStoreRequest $request) {
        $model = new Project();
        $model->fill($request->all());
        $model->save();
        $resource = new ProjectResource($model);
        return response()->json($resource);
    }
    public function update(ProjectUpdateRequest $request, $id) {
        $model = Project::findOrFail($id);
        $model->fill($request->all());
        $model->save();
        $resource = new ProjectResource($model);
        return response()->json($resource);
    }
    public function delete($id) {
        $model = Project::findOrFail($id);
        $model->delete();
        $resource = new ProjectResource($model);
        return response()->json($resource);
    }

}
