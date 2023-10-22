<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'subject',
        'description',
        'claim_date',
        'status',
        'claimImage',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function responses(){
        return $this->hasMany(Response::class);
    }
}
