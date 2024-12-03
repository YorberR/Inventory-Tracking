<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'purchase_price',
        'sale_price',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function inventories():HasMany
    {
        return $this->hasMany(Inventory::class);
    }
}
