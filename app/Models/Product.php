<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'subcategory_id',
        'name',
        'description',
        'price',
        'discount_price',
        'stock',
        'sku',
        'image',
        'status',
    ];

    /**
     * Get the subcategory that owns the product.
     */
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
    public function cartItem()
    {
        return $this->hasMany(Product::class);
    }
    public function deals()
    {
       return $this->belongsToMany(Deal::class, 'deal_product');
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
