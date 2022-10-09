<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $table = 'projects';

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }
}