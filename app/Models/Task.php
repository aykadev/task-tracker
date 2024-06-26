<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded =[
        'id',
    ];

    protected $fillable = [
        'title', 'description', 'project_id', 'user_to', 'status', 'priority', 'due-date'
    ];

    public function project()
    {
        return $this -> belongsTo(Project::class);
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
}
