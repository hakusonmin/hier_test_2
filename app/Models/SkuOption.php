<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuOption extends Model
{
    /** @use HasFactory<\Database\Factories\SkuOptionFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function skus()
    {
        return $this->belongsToMany(Sku::class, 'sku_options')->withPivot('name');
    }
}
