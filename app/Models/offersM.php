<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offersM extends Model
{
    use HasFactory;
    protected $table  = "offers";
    protected $guarded = ['id'];

    public function food(){
        return $this->belongsTo(foodM::class,"food_id","id");
    }
}
