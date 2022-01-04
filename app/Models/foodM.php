<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class foodM extends Model
{
    use HasFactory;
    protected $table  = "food";
    protected $guarded = ['id'];
    
    public function offers(){
        return $this->hasMany(offersM::class,"food_id","id");
    }
}
