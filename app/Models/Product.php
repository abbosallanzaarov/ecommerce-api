<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'desc',
        'category_id'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
}
