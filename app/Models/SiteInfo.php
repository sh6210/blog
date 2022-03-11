<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiteInfo extends Model
{
    use HasFactory;

    public function keywords(): Attribute
    {
        return new Attribute(
            get: fn($value) => explode(',', $value),
        );
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
