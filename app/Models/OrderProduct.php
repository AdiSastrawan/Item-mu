<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = "order_products";

    protected $fillable = ["order_id", "name", "price", "amount", "created_at", "updated_at"];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
