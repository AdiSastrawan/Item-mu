<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;
    protected $table = "order_histories";

    protected $fillable = ["order_id", "status", "created_at", "updated_at"];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
