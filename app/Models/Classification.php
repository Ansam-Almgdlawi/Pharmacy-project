<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Classification extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'classN'
    ];


    public function drugs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Drug::class,'classifications_Id');
    }
}
