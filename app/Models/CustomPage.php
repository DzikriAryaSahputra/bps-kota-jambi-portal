<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomPage extends Model
{
    protected $fillable = ['name', 'slug'];

    public function cards(): HasMany
    {
        return $this->hasMany(CustomCard::class, 'custom_page_id')->orderBy('order_no');
    }
}
