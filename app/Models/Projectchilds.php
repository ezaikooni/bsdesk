<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Projectchilds extends Pivot
{
    use HasFactory;

    protected $table = 'projectchilds';
    protected $fillable = [
        'subproject_id',
        'project_id'
    ];

    public function subprojectlists()
    {
        return $this->belongsTo(Projectchilds::class, 'subproject_id', 'id');
    }

    public function subprojectlistss()
    {
        return $this->belongsTo(Projectchilds::class, 'project_id');
    }
}
