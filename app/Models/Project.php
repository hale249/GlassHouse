<?php

namespace App\Models;

use App\Models\Traits\Attributes\ActiveLabelAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use ActiveLabelAttribute;
    protected $appends = [
        'active_label'
    ];
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description_short',
        'address',
        'is_active',
        'type_project',
        'seo_text',
        'content',
        'created_by',
        'category_id',
        'image',
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class, 'project_id', 'id');
    }
}
