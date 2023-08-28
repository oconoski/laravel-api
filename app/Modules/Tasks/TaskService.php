<?php

namespace App\Modules\Tasks;

use App\Modules\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class TaskService{
    public function __construct(Task $model){
        $this->model = $model;
    }

    public function get() {
        
        try {
            DB::beginTransaction();
            
            $tasks = $this->model->get();

            DB::commit();
        } catch (Exception $e) {
            echo $e;
            DB::rollBack();
        }

        return $tasks;
    }

}