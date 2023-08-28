<?php

namespace App\Modules\Tasks\Http\Controllers;

use App\Modules\Tasks\Http\Requests\TaskRequest;
use App\Modules\Tasks\TaskService;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TaskController extends BaseController
{
    public function __construct(TaskService $task_service){
        $this->task_service = $task_service;
    }

    public function get() {
        info('a');
        return response()->json([
        'tasks' => $this->task_service->get(),
        ], 200);
    }

    public function store(TaskRequest $request)
    {
        info($request->toArray());
        echo 'aaaa';
        return;
    }

    public function find($id)
    {
        //
    }

    public function update(TaskRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
