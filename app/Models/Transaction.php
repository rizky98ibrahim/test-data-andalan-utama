<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'reference_no',
        'price',
        'quantity',
        'payment_amount',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
