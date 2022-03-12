<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    public function writer(): BelongsTo
    {
        return $this->belongsTo(Writer::class);
    }

    public function editor(): BelongsTo
    {
        return $this->belongsTo(Editor::class);
    }
}
