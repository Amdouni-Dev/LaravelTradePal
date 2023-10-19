<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Donation;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Item;
use App\Models\Request;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 'hazelnuts','name', 'email', 'password', 'username', 'role', 'phone', 'profile_picture', 'account_status', 'bio' ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function donations(){
        return $this->hasMany(Donation::class);
    }

    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function requests(){
        return $this->hasMany(Request::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
       }

    public function claims(){
        return $this->hasMany(Claim::class);
    }

    public function responses(){
        return $this->hasMany(Response::class);
    }



    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

}
