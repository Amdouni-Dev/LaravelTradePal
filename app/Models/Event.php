<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
//    protected $fillable = ['nom'];

    protected $fillable = ['id'];

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
