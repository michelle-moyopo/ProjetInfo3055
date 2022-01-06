<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fast Blood | inscription</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

<section style="background-image: url(img/bg-img/blood.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; height: 100vh;">
	<div class="col-lg-4 bg-white" style="height: 100vh; box-shadow: 0 5px 40px rgba(0, 0, 0, 0.15);">
		<div class="mx-auto text-center pt-4" style="height: 15%;"><a href="index-2.html"><img src="img/core-img/logo.png" style="height: 100px; width: 200px;" alt="" title="retour à l'acceuil | Fast blood"></a></div>
		<div class="mx-auto text-center mt-5">
			<h1 class="text-dark" style="font-weight: bold;">Se connecter</h1>
		</div>
		<div class="mx-auto">
			<form style="margin-left: 40px;" class="form" action="/login" method="POST">
            @csrf
        {{csrf_field()}}
				<label class="text-dark" style="text-align: right !important;">Email</label><br/>
				<input type="email" name="mail" placeholder="vous@example.com" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="mail">

				<label class="text-dark " style="text-align: right !important;">Mot de passe</label><span style="padding-left: 50px;"><a href="#" class="text-danger">mot de passe oublié ?</a></span><br/>
				<input type="password" name="password" placeholder="*******" style="height: 45px; width: 80%;" class="border border-muted mb-3" id="pwd">
				<button type="submit" class="text-white text-uppercase mt-2 border-0 shadow p-2" style="background-color:#FE531D; width: 38%; border-start-start-radius: 1rem; border-end-end-radius: 1rem;">Se connecter</button>
			</form>
		</div> 
		<div class="mx-auto text-center mt-3">
			<img src="img/core-img/minus.png" style="height: 5px; width: 45%;" alt="">OU<img src="img/core-img/minus.png" style="height: 5px; width: 45%;" alt="">
		</div>
		<div class="d-flex border border-1 border-primary w-75 rounded-2 mt-3" style="margin-left: 40px; height: 50px; border-radius: 2px;">
			<div class=" border pt-1 text-center" style="width: 15%;">
				<img src="img/core-img/facebook.png" style="height: 35px; width: 35px;" alt="" title="retour à l'acceuil | Fast blood">
			</div>
			<div class=" border border-primary text-center pt-2 bg-primary"style="width: 85%;">
				<span class="text-center text-white"><h5> S'identifier avec Facebook</h5></span>
			</div>
		</div>

		<div class="d-flex border border-1 border-danger w-75 rounded-2 mt-2" style="margin-left: 40px; height: 50px; border-radius: 2px;">
			<div class=" border pt-1 text-center" style="width: 15%;">
				<img src="img/core-img/google.png" style="height: 35px; width: 35px;" alt="" title="retour à l'acceuil | Fast blood">
			</div>
			<div class=" border border-danger text-center pt-2 bg-danger"style="width: 85%;">
				<span class="text-center text-white"><h5> S'identifier avec Google</h5></span>
			</div>
		</div>
		<div class="text-center mt-3">
			<p>Vous n'avez pas encore de compte? <span><a href="sign_up.html">inscrivez-vous</a></span></p>
		</div>
	</div>
</section>

</body>
</html>