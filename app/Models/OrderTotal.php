<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTotal extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = ["order_id", "total_amount",  "created_at", "updated_at"];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
