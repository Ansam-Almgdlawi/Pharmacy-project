<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StoreHouse extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded='store_house';
    /* *
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
    ];

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
        'password' => 'hashed',
    ];

    public function drug_store_house(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DrugStoreHouse::class);
    }
    public function orders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
    public function notification(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Notification::class);
    }
    public function token(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Token::class);
    }

}