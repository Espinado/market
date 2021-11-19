<?php

namespace App\Http\Controllers\Management\Owner\Dealers_info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;
use App\Models\Management\Owner\Dealers\DealerCompany;
use Config;
use Illuminate\Support\Facades\DB;

class DealerCompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $dealerCompanies = DealerCompany::all();

        return view('management.owner.dealers_info.dealers_list', compact('dealerCompanies'));
    }

    public function addDealerCompany()
    {
        return view('management.owner.dealers_info.add_dealer_company_form');
    }

    public function storeDealerCompany(request $request)
    {
        // dd($request->all());
        // $validateData = $request->validate([
        //     'company_country'                   => 'required',
        //     'company_status'                    => 'required',
        //     'company_name'                      => 'required|max:20;unique:DealerCompany',
        //     'company_reg_number'                => 'required|max:20;unique:DealerCompany',
        //     'company_legal_city'                => 'required',
        //     'company_legal_street'              => 'required',
        //     'company_legal_house'               => 'required',
        //     'company_legal_room'                => 'required',
        //     'company_legal_post_code'           => 'required',
        //     'dealer_company_admin_name'         => 'required',
        //     'dealer_company_admin_surname'      => 'required',
        //     'dealer_company_admin_email'        => 'required',
        // ]);
        $dealerCompany = new DealerCompany();
        $dealerCompany->dealer_company_status = $request->company_status;
        $dealerCompany->dealer_company_name = $request->company_name;
        $dealerCompany->save();
        $dealerCompany->dealer_company_profile()->create([

            'dealer_company_reg_number'             => $request->company_reg_number,
            'dealer_company_vat_number'             => $request->company_reg_number,
            'dealer_company_legal_country'          => $request->company_country,
            'dealer_company_legal_city'             => $request->company_legal_city,
            'dealer_company_legal_street'           => $request->company_legal_street,
            'dealer_company_legal_house'            => $request->company_legal_house,
            'dealer_company_legal_room'             => $request->company_legal_room,
            'dealer_company_legal_post_code'        => $request->company_legal_post_code,
            'dealer_company_phys_country'           => $request->company_country,
            'dealer_company_phys_city'              => $request->company_legal_city,
            'dealer_company_phys_street'            => $request->company_legal_street,
            'dealer_company_phys_house'             => $request->company_legal_house,
            'dealer_company_phys_room'              => $request->company_legal_room,
            'dealer_company_phys_post_code'         => $request->company_legal_post_code,

        ]);
        $user = $dealerCompany->dealer_company_users()->create([
            'name'         => $request->company_admin_person_name,
            'surname'      => $request->company_admin_person_surname,
            'email'        => $request->company_admin_person_email,
        ]);

        $user->dealer_company_user_profile()->create([
            'name'         => $request->company_admin_person_name,
            'surname'      => $request->company_admin_person_surname,
            'email'        => $request->company_admin_person_email,
            'phone'        => '1234567',
        ]);
        $notification = array(
            'messege' => 'Done',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DealerCompanyProfile($uuid)
    {
        // request should be refactored
        $dealerCompany = DealerCompany::with('dealer_company_users')
            ->with('dealer_company_profile')
            ->first();
            return view('management.owner.dealers_info.dealer_company_info', compact('dealerCompany'));
    }
}
