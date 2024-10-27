<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory; //allow the model to use factories for generating fake data
    public function tasks() //define the relationship between task and projects
    {
        return $this->hasmany(Task::class); //project has many tasks
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function upadatedBy()
    {
        return $this->belongsTo(User::class, 'upadated_by');
    }
}
