<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductReview extends Model
{
    use HasFactory;

    protected $fillable=['only_user_that_bought_product', 'product_id'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

}
