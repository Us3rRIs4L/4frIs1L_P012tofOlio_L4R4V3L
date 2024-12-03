<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'project_skill');
    }

    public function programming_language()
    {
        return $this->belongsToMany(ProgrammingLanguage::class, 'project_programming_language');
    }

    public function tool()
    {
        return $this->belongsToMany(Tool::class, 'project_tool');
    }

    public function framework()
    {
        return $this->belongsToMany(Framework::class, 'project_framework');
    }
}
