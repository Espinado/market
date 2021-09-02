<?php

namespace App\Http\Controllers\Management\Dealers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealer');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('management.dealers.dashboard');
    }
}
