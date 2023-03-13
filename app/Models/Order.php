<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";

    protected $fillable = ["user_id", "name", "email", "created_at", "updated_at"];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function orderHistories()
    {
        return $this->hasMany(OrderHistory::class);
    }

    public function orderTotals()
    {
        return $this->hasMany(OrderTotal::class);
    }
}
