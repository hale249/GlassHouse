<?php

namespace App\Models\Traits\Attributes;

trait ActiveLabelAttribute
{
    public function getActiveLabelAttribute(): string
    {
        if ($this->is_active) {
            return '<span class="badge badge-success">Hiển thị</span>';
        }

        return '<span class="badge badge-danger">Ẩn</span>';
    }
}
