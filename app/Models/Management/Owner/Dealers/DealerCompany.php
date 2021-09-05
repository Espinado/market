<?php

namespace App\Models\Management\Owner\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerCompany extends Model
{
    protected $guard = 'admin';

    protected $fillable = [
        'company_name',
        'company_reg_number',
        'company_email',
        'company_address',
        'company_country',
        'tax_payer',
        'is_active'
    ];
}
