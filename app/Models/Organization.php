<?php

namespace App\Models;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [

        'name', 'description', 'type', 'location', 'phone_number', 'email', 'website', 'founding_date'

    ];

    public function donations(){
        return $this->hasMany(Donation::class);
    }
}
