<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    // Relación: un proyecto tiene muchas tareas
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}