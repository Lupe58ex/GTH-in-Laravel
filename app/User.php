<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'name',
            'email',
            'email_verified_at',
            'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function date_closes(){
        return $this->hasMany(Date_close::class);
    }
    public function academic_Trainings(){
        return $this->hasMany(Academic_Training::class);
    }
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
    public function bonus_Discounts(){
        return $this->hasMany(bonus_Discount::class);
    }
}
