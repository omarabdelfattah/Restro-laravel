<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ordersM extends Model
{
    use HasFactory;
    protected $table  = "orders";
    protected $guarded = ['id'];
    
  
}
