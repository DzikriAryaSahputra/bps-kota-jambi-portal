<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Submenu extends Model
{
    protected $fillable = ['menu_id', 'name', 'slug'];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class)->orderBy('order_no');
    }
}
