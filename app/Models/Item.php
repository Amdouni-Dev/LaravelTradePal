<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Request;
use App\Models\User;
class Item extends Model
{  use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'description',
        'status',
        'amount',
        'picture'
        
    ];
   public function requests(){
    return $this->hasMany(Request::class);
   } 
   public function user(){
    return $this->belongsTo(User::class);
}
}