<!-- Starlight CSS -->
<link rel="stylesheet" href="{{ asset('../backend/css/starlight.css') }}" media="screen" />

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">


        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">{{$userCreated->name}} <span class="tx-info tx-normal">{{$userCreated->surname}}</span></div>
        <div class="tx-center mg-b-60">{{Config::get('company_legal_status.legal_status.'.$userCreated->dealer_company->dealer_company_profile->dealer_company_legal_country.'.status.'.$userCreated->dealer_company->dealer_company_status)}} "{{$userCreated->dealer_company->dealer_company_name}}"</div>

   <form action="{{ route('save.dealer.user')}}" method="post">
    @csrf
        <div class="form-group">
          <input type="email" class="form-control" name="email" value="{{$userCreated->email }}" readonly autocomplete="email" autofocus placeholder="Email Address">
        </div><!-- form-group -->

          <input type="hidden" name="token" value="{{ $userCreated->token}}">
        <div class="form-group">
          <input type="password" id="password "class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

          {{-- <a href="{{ route('admin.password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> --}}
        </div><!-- form-group -->
        <div class="form-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                      

            {{-- <a href="{{ route('admin.password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> --}}
          </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
     </form>

      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
