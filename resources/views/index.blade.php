    @extends('layouts.navfoot')
    @section('title')
    Home
    @endsection
    @section('content')
    <header class="page-header gradient pt-5">
      <div class="container pt-4 px-4"> 
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5">
            <h2 id="textTitle">Proteggi i tuoi dati critici con Soft Cloud.</h2>
            <p class="mt-5" id="para">Molte aziende si muovono nella nostra tecnologia di Cloud per proteggere i dati da furti, esfiltrazione e cancellazione. Inoltre teniamo molto alla tua privacy!</p>
            <a type="button" class="btn btn-lg mt-2 px-5" id="btnOutline" href="{{ route('register') }}">Inizia Ora!</a>
            <div class="mt-4"><small>Oppure se sei già registrato <a href="{{ route('login') }}" class="links">accedi</a>.</small></div>
            <div class="mt-2" id="socialDiv">
              <a href="#"><i class="fa fa-instagram mr-2" style="font-size:24px"></i></a>
              <a href="#"><i class="fa fa-facebook-official mr-2" style="font-size:24px"></i></a>
              <a href="#"><i class="fa fa-github" style="font-size:24px"></i></a>
            </div>
          </div>
          <div class="col-lg-5 d-none d-lg-block align-items-center"><img id="imgCloud" src="img/PNG/cloud security1.png" alt="cloud"></div>
        </div>
      </div>
    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 230"><path fill="rgb(195,79,224)" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,112C384,128,480,160,576,170.7C672,181,768,171,864,154.7C960,139,1056,117,1152,90.7C1248,64,1344,32,1392,16L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="text-center container" id="firstTitle">Come teniamo al sicuro i tuoi dati</div>
    <div class="container-fluid px-5 my-4">
      <div class="row justify-content-center align-items-start gx-5 gb-5" id="secondRow">
        <div class="col-xxl-3 col-md-5 card">
          <img src="img/PNG/password protection.png" width="300" height="300" alt="passwordProtection">
          <div class="SmallTitle">Password Criptate</div>
          <p class="mt-3">Utilizziamo algoritmi validi e certificati per criptare le password dei nostri utenti. Solo voi conoscete la vostra password.</p>
        </div>
        <div class="col-xxl-3 col-md-5 card">
          <img src="img/PNG/phishing attack.png" width="300" height="300" alt="phishingImage">
          <div class="SmallTitle">Pishing Inefficace</div>
          <p class="mt-3">Il phishing, anche se applicato agli utenti, sarà una tecnica inefficace poichè utilizziamo diversi strati di sicurezza per proteggere i vostri dati.</p>
        </div>
        <div class="col-xxl-3 col-md-5 card">
          <img src="img/PNG/pattern lock.png" width="300" height="300" alt="patternLock">
          <div class="SmallTitle">Pattern Lock sicuri</div>
          <p class="mt-3">Per accedere ai vostri contenuti dovrete utilizzare il vostro account come prova che siete voi, neppure noi possiamo vedere i vostri contenuti.</p>
        </div>
      </div>
    </div>
    @endsection
