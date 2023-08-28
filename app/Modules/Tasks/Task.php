<?php

namespace App\Modules\Tasks;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    use SoftDeletes;
    protected $filliable = [
        'title',
        'description',
        'completed',
        'completed_at',
    ];

    protected $with = [
        'file'
    ];

    protected $appends = [
        'user_name'
    ];

    public function files() {
        return $this->morphMany(File::class, 'fileable');
    }

    public function getUserNameAttribute() {
        return $this->morphOne(User::class, 'userable')->select('name');
    }
}
