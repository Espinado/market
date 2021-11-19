<?php

namespace App\Http\Controllers\Management\Owner\Dealers_info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management\Owner\Dealers\InviteDealerUser as Invite;

class DealerUserInviteController extends Controller
{
    public function generate()
    {
        $num = range(0, 9);
        $alf = range('a', 'z');
        $_alf = range('A', 'Z');
        $symbols = array_merge($num, $alf, $_alf);
        shuffle($symbols);
        $code_array = array_slice($symbols, 0, 10);
        $code = implode("", $code_array);

        return $code;
    }
    public function create()
    {
        Invite::create([
            'invite' => $this->generate(),
        ]);

        return 'Ok';
    }
}
