<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Drug extends Model
{
    use SoftDeletes;
    use HasFactory,Notifiable,HasApiTokens;
    protected $fillable=[
       'scientificName',
        'commercialName',
        'manufacturer',
        'quantity',
        'expirationDate',
        'price',
        'classifications_Id',
        'store_houses_Id',
        'isfavorite'
    ];
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($drug) {
            if ($drug->quantity === 0) {
                $drug->forceDelete();
            }
        });
    }

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
        return $this->hasMany(Basket::class,'drugs_Id');
    }
    public function favorite(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Favorit::class);
    }
}