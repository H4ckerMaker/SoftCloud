@extends('layouts.page')
@section('title','login')
@section('content')
<body>
    <section class="m-auto">
        <div class="container py-5 gradient" id="RegCardLogin">
            <div class="row justify-content-between align-items-center">
                <div class="col-12">
                    <div id="cardForm" class="py-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="SmallTitle text-center mb-3">Accedi al tuo account</div>
                            <div class="row justify-content-center align-items-start">
                                <div class="col-md-5 col-10">
                                    <div>
                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="La tua Email *" value="{{ old('email') }}" required>
                                    </div>
                                    <div>
                                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" placeholder="La tua password *" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" value="{{ old('remember') ? 'checked': '' }}" class="form-check-input">
                                            <label for="remember" class="form-check-label">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-start">
                                <div class="col-md-5 col-10">
                                    <input type="submit" class="btn btn-lg" id="loginBtn" style="color: white;margin: 1rem; width:100%" value="Accedi" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</body>
@endsection