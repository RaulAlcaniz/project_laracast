<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // We are allowing everything in the controller
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}