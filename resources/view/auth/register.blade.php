<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEOMeta::generate() !!}
    <title>Fast Blood | inscription</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>

<section style="background-image: url({{ asset('img/bg-img/g3.jpg') }}); background-repeat: no-repeat; background-attachment: fixed; background-size: contain; height: 100vh; background-position-x: 50vw;">

    <div class="col-lg-6 bg-white" style="height: 100vh; box-shadow: 0 5px 40px rgba(0, 0, 0, 0.15);">
        <div class="mx-auto text-center pt-4" style="height: 15%;"><a href="/"><img src="{{ asset('img/core-img/logo.png') }}" style="height: 100px; width: 200px;" alt="" title="retour à l'acceuil | Fast blood"></a></div>
        <div class="mx-auto text-center mt-5">
            <h1 class="text-dark" style="font-weight: bold;">S'inscrire</h1>
        </div>
        <div class="mx-auto">
            <form style="margin-left: 40px;" action="{{ route('register') }}" method="post">
                @csrf
                <div class="row d-flex">
                    <div class="col-6 mb-3">
                        <label class="text-dark " style="text-align: right !important;" for="email">Email</label><br/>
                        <input type="email" id="email" name="email" placeholder="ex@example.com" style="height: 45px; width: 80%;" class="border border-muted mb-3 @error('email') is-invalid @enderror" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label class="text-dark" for="telephone" style="text-align: right !important;">Telephone</label><br/>
                        <input type="tel" name="telephone" placeholder="6XXXX" style="height: 45px; width: 80%;"
                               class="border border-muted mb-3 @error('telephone') is-invalid @enderror" required>
                        @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label class="text-dark " for="name" style="text-align: right !important;">{{ __('messages.name') }}</label><br/>
                        <input type="text" name="name" placeholder="name" style="height: 45px; width: 80%;"
                               class="border border-muted mb-3 @error('name') is-invalid @enderror" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label class="text-dark" for="password" style="text-align: right !important;">{{ __('messages.password') }}</label><br/>
                        <input type="password" name="password" id="password" style="height: 45px; width: 80%;"
                               class="border border-muted mb-3 @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="text-white text-uppercase mt-2 border-0 shadow p-2" style="background-color:#FE531D; width: 38%; border-start-start-radius: 1rem; border-end-end-radius: 1rem;">
                    {{ __('messages.register') }}
                </button>
            </form>
        </div>
        <div class="text-center mt-3">
            <p>Vous avez déjà un compte? <span><a href="{{ route('login') }}">{{ __('messages.login') }}</a></span></p>
        </div>
    </div>
</section>

</body>
</html>
