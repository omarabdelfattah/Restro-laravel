<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablesM extends Model
{
    use HasFactory;
    protected $table  = "tables";
    protected $guarded = ['id'];
}
