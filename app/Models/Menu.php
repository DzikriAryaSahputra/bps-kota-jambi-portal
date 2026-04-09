<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    protected $fillable = ['name', 'slug', 'type', 'url', 'new_tab', 'order_no', 'is_visible'];

    protected $casts = ['new_tab' => 'boolean', 'is_visible' => 'boolean'];

    public function submenus(): HasMany
    {
        return $this->hasMany(Submenu::class)->orderBy('name');
    }

    public function getSortedSubmenusAttribute()
    {
        return $this->submenus
            ->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)
            ->values();
    }
}
