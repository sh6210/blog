<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    public function accounts(): Attribute
    {
        return new Attribute(
            get: fn($value) => json_decode($value),
            set: fn($value) => json_encode($value)
        );
    }

    public function mobileBanking(): Attribute
    {
        return new Attribute(
            get: fn($value) => json_decode($value),
            set: fn($value) => json_encode($value)
        );
    }
}
