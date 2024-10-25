<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        "first_name",
        "last_name",
    ];

    /**
     * @return HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    /**
     * @return Attribute
     */
    public function fullName(): Attribute
    {
        return Attribute::get(fn () => $this->first_name . ' ' . $this->last_name);
    }
}
