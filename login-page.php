<?php
session_start();

$error="";


if(array_key_exists("logout", $_GET)){ //если существует такая переменная, то мы хотим выйти из сайта
	unset($_SESSION); // сбрасываем сессию
	setcookie("id", "", time() - 60*60);
	$_COOKIE["id"]="";

}else if((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id']) ){ // если не вышел
	// а если вошел, то мы не хотим видеть форму ввода

header("Location: profile.php"); // перенаправляем на страницу профиля

}



if(array_key_exists("submit", $_POST)){

	
	
	
	$link = mysqli_connect("sdb-u.hosting.stackcp.net", "kiberfairy-3231310021","popi1234", "kiberfairy-3231310021");


	if(mysqli_connect_error()){
		die ("ошибка");
	}

	
	if(!$_POST['email']){
		$error .= "Требуется адрес эл.почты";

	}
	if(!$_POST['password']){
		$error .= "Требуется пароль";
		
	}
	if($error=""){
		$error ="<p>В вашей форме ошибки:</p>.$error";
		
	}else{

		if($_POST['signUp']== '1'){

		
		$query="SELECT id FROM `users` WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
		$result = mysqli_query($link, $query);
		if(mysqli_num_rows($result)>0){
			$error= "Адрес занят)";
		}else{
			
		$query="INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
			
		if(!mysqli_query($link, $query)){
			$error="<p>Не удалось зарегаться</p>";
		}else{


			$query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

         mysqli_query($link, $query);

			$_SESSION['id']= mysqli_insert_id($link);
		

			if($_POST['stayLoggedIn']=='1'){
				setcookie("id", mysqli_insert_id($link), time() + 60*60*24*14 );

			}
			header("Location: profile.php");




		}

		}

	}else{

	   $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

		$result=mysqli_query($link, $query);

		$row = mysqli_fetch_array($result);

		if(isset($row)){

			$hashedPassword = md5(md5($row['id']).$_POST['password']);

			if($hashedPassword == $row['password']){

				$_SESSION['id'] = $row['id'];

				if($_POST['stayLoggedIn']=='1'){
					setcookie("id", $row['id'], time() + 60*60*24*14 );
	
				}
				header("Location: profile.php");

			}else{
				$error = "Неверный email/пароль";
			}

		}else{
			$error = "Неверный email/пароль";
		}




	}
		
	}


}






?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/login.js" defer></script>
	<title>Авторизация</title>

</head>

<body>



	<div class="wrapper">

	<header class="header">
			<div class="header__top top-header">
				<div class="top-header__container">
					<?php
						include('nav.php');
					?>
				</div>
			</div>
		</header>
		
		<main class="main-form">
			<article class="main-form__container">

				<div class="main-form__block block">
					<section class="block__item block-item">
						<h2 class="block-item__title">У вас уже есть аккаунт?</h2>
						<button class="block-item__btn signin-btn">Войти</button>
					</section>
					<section class="block__item block-item">
						<h2 class="block-item__title">У вас еще нет аккаунта?</h2>
						<button class="block-item__btn signup-btn">Зарегистрироваться</button>
					</section>
				</div>

				<div class="form-box">
					<div class="error" id="error"><?php echo $error; ?></div>



					<form method="post" class="form form_signin">
						<h3 class="form__title">Вход</h3>
						<p>
							<input name="email" type="email" class="form__input" placeholder="Email">
						</p>
						<p>
							<input name="password" type="password" class="form__input" placeholder="Пароль">
						</p>
						<input type="checkbox" name="stayLoggedIn" value="1">
						<input type="hidden" name="signUp" value="0">
						<p>
							<button class="form__btn" type="submit" value="log in" name="submit">Войти</button>
						</p>

					</form>


					<form method="post" class="form form_signup">
						<h3 class="form__title">Регистрация</h3>

						<p>
							<input name="username" type="text" class="form__input" placeholder="Имя пользователя" required>
						</p>
						<p>
							<input name="email" type="email" class="form__input" placeholder="Email" >
						</p>
						<p>
							<input name="password" type="password" class="form__input" placeholder="Пароль" >
						</p>
						<p>
							<input name="pass" type="password" class="form__input" placeholder="Подтвердите пароль" required>
						</p>
						<input type="checkbox" name="stayLoggedIn" value="1">
						<input type="hidden" name="signUp" value="1">
						<p>
							<button name="submit" class="form__btn form__btn_signup" type="submit" value="sign up">Зарегистрироваться</button>
						</p>

					</form>
				</div>
			</article>
		</main>
	</div>

</body>

</html>