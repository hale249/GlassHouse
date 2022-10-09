<?php

namespace App\Models;

use App\Models\Traits\Attributes\ActiveLabelAttribute;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use ActiveLabelAttribute;
    protected $table = 'pro_categories';

    protected $guarded = [];
    protected $appends = [
        'active_label'
    ];
}
