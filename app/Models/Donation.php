<?php

namespace App\Models;

use App\Models\Organization;
use App\Models\User;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'timestamp',
        'organization_id',
        'amount',
        'object',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function donor()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->hasOne(Item::class);
    }
}
