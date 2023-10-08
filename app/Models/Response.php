<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'claim_id',
        'content',
        'response_date'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function claim(){
        return $this->belongsTo(Claim::class);
    }
}
