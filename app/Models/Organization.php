<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = [

        'name', 'description', 'type', 'location', 'phone_number', 'email', 'website', 'founding_date'

    ];
}
