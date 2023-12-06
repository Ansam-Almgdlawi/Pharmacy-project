<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Favorite extends Model
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable=[
        'users_Id',
        'drugs_Id'
    ];
    public function drug(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Drug::class,'drugs');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,'users');
    }
}
