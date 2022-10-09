<?php

namespace App\Models;

use App\Models\Traits\Attributes\ActiveLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use ActiveLabelAttribute;
    protected $appends = [
        'active_label'
    ];
    protected $table = 'projects';

    protected $guarded = [];


    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
