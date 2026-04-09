<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class CustomCard extends Model
{
    protected $fillable = ['custom_page_id', 'name', 'image_url', 'image_path', 'url', 'new_tab', 'order_no'];

    protected $casts = ['new_tab' => 'boolean'];

    public function page(): BelongsTo
    {
        return $this->belongsTo(CustomPage::class, 'custom_page_id');
    }

    public function getImageAttribute(): ?string
    {
        if ($this->image_path) {
            return '/storage/'.ltrim($this->image_path, '/');
        }

        return $this->image_url ?: null;
    }

    protected static function booted(): void
    {
        static::deleting(function (CustomCard $card) {
            if ($card->image_path) {
                Storage::disk('public')->delete($card->image_path);
            }
        });
    }
}
