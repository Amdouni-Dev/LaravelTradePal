<?php

namespace App\Models;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{ use HasFactory;
    protected $fillable = [
        'user_id',
        'desired_id',
        'exchangeable_id',
        'note',
        'status',
    ];
public function desiredItem(){
        return $this->belongsTo(Item::class);
}
    
public function exchangeableItem(){
        return $this->belongsTo(Item::class);
    }
public function user(){
    return $this->belongsTo(User::class);
}
}