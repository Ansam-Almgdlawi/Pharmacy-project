<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Drug extends Model
{
    use HasFactory,Notifiable,HasApiTokens;
    protected $fillable=[
       'scientificName',
        'commercialName',
        'quantity',
        'expirationDate',
        'price',
        'classifications_Id',
        'store_houses_Id'
    ];

    public function drug_store_house(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DrugStoreHouse::class);
    }
    public function classification(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Classification::class,'classifications_Id');
    }
    public function basket(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Basket::class);
    }
}
