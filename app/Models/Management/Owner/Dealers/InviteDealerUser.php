<?php

namespace App\Models\Management\Owner\Dealers;

use Illuminate\Database\Eloquent\Model;


class InviteDealerUser extends Model
{
    protected $fillable = [ 'email', 'token'];
}
