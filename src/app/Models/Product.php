<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
/**
 * call helper function to format price
 *
 * @return string
 */
    public function getFormattedPriceAttribute(): string
    {
        return int_to_decimal($this->price);
    }
}
