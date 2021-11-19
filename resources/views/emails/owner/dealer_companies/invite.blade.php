<p>Привет, {{$name}} {{$surname}}</p>

<p>Кто-то пригласил вас зарегистрироваться .</p>

<a href="{{ route('accept', ['token'=>$invite->token, 'name'=>$name, 'surname'=>$surname]) }}">Жамка сюда</a> для активации!
