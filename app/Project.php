<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected  $fillable = [
        'title', 'description'
    ];

    public function tasks()
    {
       return $this->hasMany(Task::class);
    }

    public function addTask($task_attributes)
    {
        $this->tasks()->create($task_attributes);
        #That's not bad, but can be done better since we have a relationship
        /* return Task::create([
            'project_id' => $this->id,
            'description' => $description
        ]); */
    }
}
