<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DrugStoreHouse extends Model
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable = [
        'drug_Id',
        'store_houses_Id',
    ];

    public function drug(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Drug::class,'drugs');
    }
    public function storeHouse(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(StoreHouse::class,'store_houses');
    }
}
