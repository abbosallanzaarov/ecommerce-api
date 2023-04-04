<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attiribute extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function value(): HasMany
    {
        return $this->hasMany(Value::class);
    }
}
