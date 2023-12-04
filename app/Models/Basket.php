<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Basket extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=[
        'drugQuan',
        'orders_Id',
        'drugs_Id'
    ];
    public function orders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Order::class,'orders');
    }
    public function drugs(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Drug::class,'drugs');
    }
}
