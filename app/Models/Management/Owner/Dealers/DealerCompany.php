<?php

namespace App\Models\Management\Owner\Dealers;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class DealerCompany extends Model
{
    use Uuids;
    protected $guard = 'admin';

    protected $fillable = [

        'dealer_company_status',
        'dealer_company_name',
        'dealer_company_reg_number',
        'dealer_company_vat_number',
        'tax_payer',
        'is_active',
        'is_banned'
    ];

    public function dealer_company_profile() {

       return $this->hasOne(DealerCompanyProfile::class);
    }
    public function dealer_company_users() {

        return $this->hasMany(DealerCompanyUser::class);
     }
}
