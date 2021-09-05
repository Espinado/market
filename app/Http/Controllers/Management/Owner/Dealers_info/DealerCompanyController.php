<?php

namespace App\Http\Controllers\Management\Owner\Dealers_info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Countries\Package\Countries;
use Config;

class DealerCompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index() {


        return view('management.owner.dealers_info.dealers_list');
    }

    public function addDealerCompany() {

        return view ('management.owner.dealers_info.add_dealer_company_form');
    }

    public function storeDealerCompany(request $request) {

        dd($request->all());
    }
}
