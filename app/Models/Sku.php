<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    /** @use HasFactory<\Database\Factories\SkuFactory> */
    use HasFactory;

    protected $fillable = ['product_number', 'price', 'stock', 'description', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'sku_options')->withPivot('name');
    }
}
