<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class orderfoodM extends Model
{
    use HasFactory;
    protected $table  = "order_food";
    protected $guarded = ['id'];
    
  
}
