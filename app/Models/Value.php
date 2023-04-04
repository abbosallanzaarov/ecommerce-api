<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory , HasTranslations;
    public array $translatable = ['name'];
    protected $fillable = ['name' , 'attiribute_id' , 'product_id'];
    public function attiribute(): BelongsTo
    {
        return $this->belongsTo(Attiribute::class);
    }

}
