<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast Blood | connexion</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>
<section style="background-image: url({{ asset('img/bg-img/blood.jpg') }}); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; height: 100vh;">
    <div class="col-lg-4 bg-white" style="height: 100vh; box-shadow: 0 5px 40px rgba(0, 0, 0, 0.15);">
        <div class="mx-auto text-center pt-4" style="height: 15%;"><a href="/"><img src="{{ asset('img/logo.png') }}" style="height: 100px; width: 200px;" alt="" title="retour à l'acceuil | Fast blood"></a></div>
        <div class="mx-auto text-center mt-5">
            <h1 class="text-dark" style="font-weight: bold;">Se connecter</h1>
        </div>
        <div class="mx-auto">
            <form style="margin-left: 40px;" action="{{ route('login') }}" method="post">
                @csrf
                <label class="text-dark" style="text-align: right !important;" for="email">Email</label><br/>
                <input type="email" name="email" placeholder="vous@example.com" style="height: 45px; width: 80%;" class="border border-muted mb-3 @error('email') is-invalid @enderror" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label class="text-dark" for="password" style="text-align: right !important;">Mot de passe</label><span style="padding-left: 50px;"><a href="#" class="text-danger">mot de passe oublié ?</a></span><br/>
                <input type="password" name="password"  style="height: 45px; width: 80%;" class="border border-muted mb-3 @error('email') is-invalid @enderror" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <button type="submit" class="text-white text-uppercase mt-2 border-0 shadow p-2" style="background-color:#FE531D; width: 38%; border-start-start-radius: 1rem; border-end-end-radius: 1rem;">Se connecter</button>
            </form>
        </div>
        <div class="mx-auto text-center mt-3">
            <img src="{{ asset('img/core-img/minus.png') }}" style="height: 5px; width: 45%;" alt="">OU<img src="{{ asset('img/core-img/minus.png') }}" style="height: 5px; width: 45%;" alt="">
        </div>
        <div class="d-flex border border-1 border-primary w-75 rounded-2 mt-3" style="margin-left: 40px; height: 50px; border-radius: 2px;">
            <div class=" border pt-1 text-center" style="width: 15%;">
                <img src="{{ asset('img/core-img/facebook.png') }}" style="height: 35px; width: 35px;" alt="" title="retour à l'acceuil | Fast blood">
            </div>
            <div class=" border border-primary text-center pt-2 bg-primary"style="width: 85%;">
                <span class="text-center text-white"><h5> S'identifier avec Facebook</h5></span>
            </div>
        </div>

        <div class="d-flex border border-1 border-danger w-75 rounded-2 mt-2" style="margin-left: 40px; height: 50px; border-radius: 2px;">
            <div class=" border pt-1 text-center" style="width: 15%;">
                <img src="{{ asset('img/core-img/google.png') }}" style="height: 35px; width: 35px;" alt="" title="retour à l'acceuil | Fast blood">
            </div>
            <div class=" border border-danger text-center pt-2 bg-danger"style="width: 85%;">
                <span class="text-center text-white"><h5> S'identifier avec Google</h5></span>
            </div>
        </div>
        <div class="text-center mt-3">
            <p>Vous n'avez pas encore de compte? <span><a href="{{ route('register') }}">inscrivez-vous</a></span></p>
        </div>
    </div>
</section>
</body>
</html>
