<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'customer_id', 'product_id', 'invoice',
        'resi', 'payment_proof', 'qty', 'total_price',
    ];
}
