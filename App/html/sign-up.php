<?php session_start(); ?>
<?php require '../php/userSignUp.php'; ?>
<!doctype html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/master.css">
		<link rel="stylesheet" href="../css/responsive.css">
		<title>FBO | Zarejestruj się</title>
		<script src="../js/signUpValidation.js"></script>
	</head>
	<body class="widthLimit">
		<header class="header">
			<div class="headerLogo headerElement">
				<a href="../index.html"><img src="../images/baners/baner-white.png" alt="Logo FBO"></a>
			</div>
			<div class="headerTitle headerElement">
				<h1>Rejestracja użytkownika</h1>
			</div>
		</header>
		<main>
			<section class="signSection">
				<h1 class="signTitle  hideTitle">Rejestracja użytkownika</h1>
                <h3 class="dbMsg"></h3>
				<form class="formDiv" id="signUpForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<div class="formElement" id="firstNameElement">
						<span>Imię</span>
						<input class="" type="text" name="firstname" maxlength="50" title="Podaj swoje imię" autofocus onfocusout="validate('firstNameElement')">
						<span class="formErrorMsg ok"><?php echo $firstNameErr;?></span>
					</div>
					<div class="formElement" id="mailElement">
						<span>Adres e-mail</span>
						<input class="" type="email" name="email" maxlength="50" title="Podaj swój adres e-mail" onfocusout="validate('mailElement')">
						<span class="formErrorMsg ok"><?php echo $emailErr;?></span>
					</div>
					<div class="formElement" id="passwordElement">
						<span>Hasło</span>
						<input class="" type="password" name="password" minlength="8" maxlength="20"
						       title="Podaj swoje hasło" onfocusout="validate('passwordElement')">
						<span class="formErrorMsg ok"><?php echo $passwordErr;?></span>
					</div>
					<div class="formElement" id="passwordRepeatElement">
						<span>Powtórz hasło</span>
						<input class="" type="password" name="passwordRepeat" minlength="8" maxlength="20"
						       title="Podaj swoje hasło" onfocusout="validate('passwordRepeatElement')">
						<span class="formErrorMsg ok"><?php echo $passwordRepeatErr;?></span>
					</div>
					<div class="buttonDiv">
						<input id="submitButton" class="button" type="submit" value="Zarejestruj mnie" style="cursor:pointer" disabled>
					</div>
				</form>
			</section>
		</main>
		<footer>
			<p><a href="http://jacekgalka.pl">&copy; 2016 Jacek Gałka</a></p>
		</footer>
	</body>
</html>