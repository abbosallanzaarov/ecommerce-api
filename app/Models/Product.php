<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory , HasTranslations;
    protected $fillable = [
        'name',
        'price',
        'desc',
        'category_id'
    ];
    public array $translatable = ['name' ,'desc'];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
}
