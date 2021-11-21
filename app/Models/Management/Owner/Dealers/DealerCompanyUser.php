<?php

namespace App\Models\Management\Owner\Dealers;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;
use Illuminate\Notifications\Notifiable;

class DealerCompanyUser extends Model
{
    use Uuids;
    protected $guard = 'admin';

use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'uuid','surname','email', 'password','token', 'registered_at', 'dealer_company_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function dealer_company() {

        return $this->belongsTo(DealerCompany::class);
    }

    public function dealer_company_user_profile() {

        return $this->hasOne(DealerCompanyUserProfile::class);
    }
}
