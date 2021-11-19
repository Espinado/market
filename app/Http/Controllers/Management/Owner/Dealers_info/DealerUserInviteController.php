<?php

namespace App\Http\Controllers\Management\Owner\Dealers_info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Management\Owner\Dealers\InviteDealerUser as Invite;
use App\Mail\Owner\Dealer_companies\InviteCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Customers\Auth\User;
use App\Models\Management\Owner\Dealers\DealerCompanyUser;


class DealerUserInviteController extends Controller
{

    public function process(Request $request)
{
    // валидация входящих данных

    do {
        //сгенерируем рандомную строку при помощи функции помощника Laravel  `str_random`
        $token = Str::random(12);
    } // Проверим, нет ли уже такого токена, если есть сгенерим заново
    while (Invite::where('token', $token)->first());
    //создадим запись приглашения
    $invite = Invite::create([
        'email' => $request->get('email'),
        'token' => $token
    ]);

    // Отправим инвайт
    Mail::to($request->get('email'))->send(new InviteCreated($invite));

    // сделаем редирект обратно
    return redirect()
        ->back();
}

public function accept($token, $name, $surname)
{

    // Найдем приглашение
    if (!$invite = Invite::where('token', $token)->first()) {
        // если инвайт не существует, можно сделать что-то более элегантное, чем то :)
        abort(404);
    }

    // Создадим пользователя с данными из инвайта
     DealerCompanyUser::create(['email'    => $invite->email,
                   'name'     => $name,
                    'surname' => $surname]);

    // удалим инвайт, чтобы им нельзя было воспользоваться снова
    $invite->delete();

    // здесь необходимо будет «залогинить» пользователя, сделать редирект в личный кабинет, мы же просто выведем надпись.

    return 'Отлично! Пользователь зарегистрирован!';
}
}
