<?php

namespace App\Models\Management\Owner\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerCompanyUserProfile extends Model
{
    protected $guard = 'admin';
    protected $fillable = [

        'name',
        'surname',
        'login',
        'email',
        'phone',
        'image',
    ];

    public function dealer_company_user()
    {

        return $this->belongsTo(DealerCompanyUserProfile::class);
    }
}
