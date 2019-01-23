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
    public function academicTrainings(){
        return $this->hasMany(Academic_Training::class);
    }
    public function assistances(){
        return $this->hasMany(Assistances::class);
    }
    public function bonusDiscounts(){
        return $this->hasMany(bonus_Discount::class);
    }
    public function cessations(){
        return $this->hasMany(Cessation::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }
    public function criminalBackgrounds(){
        return $this->hasMany(CriminalBackground::class);
    }
    public function datecloses(){
        return $this->hasMany(DateClose::class);
    }
    public function equifaxes(){
        return $this->hasMany(Equifax::class);
    }
    public function justifications(){
        return $this->hasMany(Justification::class);
    }
    public function licenses(){
        return $this->hasMany(License::class);
    }
    public function medicalConditions(){
        return $this->hasMany(MedicalCondition::class);
    }
    public function payrolls(){
        return $this->hasMany(Payroll::class);
    }
    public function professionalExperiences(){
        return $this->hasMany(ProfessionalExperience::class);
    }
    public function schedules1(){
        return $this->hasMany(Schedule::class,'id','user1_id');
    }
    public function schedules2(){
        return $this->hasMany(Schedule::class,'id','user2_id');
    }
    public function discounts(){
        return $this->hasMany(Discount::class);
    }
}
