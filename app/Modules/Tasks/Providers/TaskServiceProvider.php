<?php

namespace App\Modules\Tasks\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Route;

class TaskServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Route::middleware(['api'])->prefix('api')
        ->namespace('App\Modules\Tasks\Http\Controllers')
        ->group(__DIR__ . '/../routes/api.php');

        Relation::morphMap([
            'tasks' => 'App\Modules\Taks\Task'
        ]);
    }
        public function register()
    {
        //
    }
}
