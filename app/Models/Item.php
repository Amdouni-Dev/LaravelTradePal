<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Request;
use App\Models\User;
use App\Models\Donation;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'description',
        'status',
        'amount',
        'picture'

    ];
    public function requests() {
        return $this->hasMany(Request::class,'desired_id');
    } 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function donation()
    {
        return $this->belongsTo(Donation::class)->withDefault();
    }
}
