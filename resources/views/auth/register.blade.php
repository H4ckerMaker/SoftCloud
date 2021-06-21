@extends('layouts.page')
@section('title')
Register
@endsection
@section('content')
<body class="d-lg-flex">
<section class="m-auto">
  <div class="container gradient py-5" id="RegCard">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-4 d-none d-lg-block p-5 page-header text-center">
        <img id="imgRocket" src="img/PNG/Rocket2.png" alt="rocket">
        <div class="SmallTitle">Benvenuto!</div>
        <p>Entra a far parte della nostra famiglia. Registrati facile e veloce. <br>Oppure <a href="login" class="links">accedi</a>.</p>
      </div>
      <div class="col-lg-8 col-12">
        <div id="cardForm" class="py-5">
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="SmallTitle text-center mb-3">Registrati in Soft Cloud</div>
            <div class="row justify-content-center align-items-start">
              <div class="col-md-5 col-10">
                <div>
                  <input type="text" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? ' is-invalid': '' }}" id="inputFirstName" name="name" placeholder="Il tuo Nome *" required>
                </div>
                <div>
                  <input type="text" value="{{ old('surname') }}" class="form-control {{ $errors->has('surname') ? ' is-invalid': '' }}" id="inputLastName" name="surname" placeholder="Il tuo Cognome *" required>
                </div>
                <div>
                  <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid': '' }}" id="inputPassword" name="password" placeholder="La tua Password *" required>
                </div>
                <div><input type="password" class="form-control" id="inputConfirmPassword" name="password_confirmation" placeholder="Conferma la Password *" required></div>
              </div>
              <div class="col-md-5 col-10">
                <div>
                  <input type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? ' is-invalid': '' }}" id="inputEmail" name="email" placeholder="La tua Email *" required>
                </div>
                <div>
                  <input type="tel" value="{{ old('telephone') }}" class="form-control {{ $errors->has('telephone') ? ' is-invalid': '' }}" id="inputTelephone" name="telephone" placeholder="Il tuo Telefono *" required>
                </div>
                <div>
                  <input type="text" value="{{ old('nationality') }}"class="form-control {{ $errors->has('nationality') ? ' is-invalid': '' }}" id="inputCountry" name="nationality" placeholder="Il tuo Paese di Residenza" required>
                </div>
                <div>
                  <input type="text" value="{{ old('organization') }}"class="form-control {{ $errors->has('organization') ? ' is-invalid': '' }}" id="inputOrganizationName" name="organization" placeholder="Nome Organizzazione" required>
                </div>
              </div>
            </div>
            <div class="row justify-content-center align-items-start">
              <div class="col-md-5 col-0"></div>
              <div class="col-md-5 col-10"><input type="submit" class="btn btn-lg" id="loginBtn" style="color: white;margin: 1rem;" value="Registrati"/></div>
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection