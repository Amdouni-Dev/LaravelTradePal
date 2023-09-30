<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hazelnut extends Model
{
    use HasFactory;
    protected $fillable = [ 'amount', 'status', 'expiration_date' ];

    public function user(){
        $this->belongsTo(User::class);
    }
}

