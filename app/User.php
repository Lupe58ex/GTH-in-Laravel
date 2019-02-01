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

    //
    public function academicTrainings(){
        return $this->hasMany(Academic_Training::class);
    }
    //
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
    //
    public function bonusDiscounts(){
        return $this->hasMany(bonus_Discount::class);
    }
    //
    public function closedAsistances(){
        return $this->hasMany(closedAsistances::class);
    }
    //
    public function centralRisks(){
        return $this->hasMany(central_risks::class);
    }
    //
    public function licenses(){
        return $this->hasMany(License::class);
    }
    //
    public function closedPayrolls(){
        return $this->hasMany(ClosedPayroll::class);
    }
    //
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }

}
