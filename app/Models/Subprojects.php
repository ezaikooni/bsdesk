<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subprojects extends Model
{
    use HasFactory;

    protected $table = 'subprojects';
    protected $fillable = [
        'name'
    ];

    public function subcategories()
    {
        return $this->hasMany(Projects::class, 'project_id');
    }

    public function projectscategory()
    {
        return $this->belongsToMany(Projects_category::class, 'project_id');
    }

    public function childs()
    {
        return $this->hasMany(Subprojects::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Subprojects::class, 'parent_id');
    }

    public function subprojects()
    {
        return $this->belongsToMany(Subprojects::class, 'subprojects', 'project_id', 'subproject_id');
    }
}
