<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'products';
    protected $hidden = ['created_at','updated_at','pivot'];

    public function order(){
        return $this->belongsToMany(Order::class,'Order_items');
        }
}
