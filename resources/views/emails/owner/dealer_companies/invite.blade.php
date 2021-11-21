
@php
$company=\App\Models\Management\Owner\Dealers\DealerCompany::where('id', $dealer_company_id)->first();

@endphp
<p>Привет, {{$name}} {{$surname}}</p>

<p>Кто-то пригласил вас зарегистрироваться  в шарашкиной конторе "{{$company->dealer_company_name}}".</p>

<a href="{{ route('accept', ['token'             =>$invite->token,
                             'name'              =>$name,
                             'surname'           =>$surname,
                             'dealer_company_id' =>$dealer_company_id,
                             ]) }}">Жамка сюда</a> для активации!
