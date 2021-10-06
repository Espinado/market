<?php

namespace App\Models\Management\Owner\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerCompanyProfile extends Model
{
    protected $guard = 'admin';
    protected $fillable=[

'dealer_company_reg_number',
'dealer_company_vat_number',
'dealer_company_legal_country',
'dealer_company_legal_city',
'dealer_company_legal_street',
'dealer_company_legal_house',
'dealer_company_legal_room',
'dealer_company_legal_post_code',
'dealer_company_phys_country',
'dealer_company_phys_city',
'dealer_company_phys_street',
'dealer_company_phys_house',
'dealer_company_phys_room',
'dealer_company_phys_post_code',
'dealer_company_admin_person',
'company_logo',
    ];

    public function dealer_company() {

        return $this->belongsTo(DealerCompany::class);
    }
}
