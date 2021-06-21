@extends('layouts.page')
@section('title')
Inizia
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
          <form action="{{ route('user.store') }}" method="POST">
            <div class="SmallTitle text-center mb-3">Registrati in Soft Cloud</div>
            <div class="row justify-content-center align-items-start">
              <div class="col-md-5 col-10">
                @csrf
                <div><input type="text" class="form-control" id="inputFirstName" name="name" placeholder="Il tuo Nome *"></div>
                <div><input type="text" class="form-control" id="inputLastName" name="surname" placeholder="Il tuo Cognome *"></div>
                <div><input type="password" class="form-control" id="inputPassword" name="pass" placeholder="La tua Password *"></div>
                <div><input type="password" class="form-control" id="inputConfirmPassword" name="pass2" placeholder="Conferma la Password *"></div>
              </div>
              <div class="col-md-5 col-10">
                <div><input type="email" class="form-control" id="inputEmail" name="email" placeholder="La tua Email *"></div>
                <div><input type="tel" class="form-control" id="inputTelephone" name="telephone" placeholder="Il tuo Telefono *"></div>
                <div><input type="text" class="form-control" id="inputCountry" name="nationality" placeholder="Il tuo Paese di Residenza"></div>
                <div><input type="text" class="form-control" id="inputOrganizationName" name="organization" placeholder="Nome Organizzazione"></div>
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