<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

        protected $guarded = [];

        public function users(){
        return $this->belongsTo(User::class,'user_id');
        }
        
        public function products(){
            return $this->belongsToMany(Product::class,'Order_items');
            }
}
