<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Order extends Model
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable = [
        'hestoryOrder',
        'preperation',
        'sent',
        'recieve',
        'paid',
        'unpaid',
    ];
    public function store_houses()
    {
        return $this->hasMany(Order::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function basket(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Basket::class);
    }
}
