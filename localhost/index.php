<!DOCTYPE html>
<html> 

<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Форма регистрации</title>
</head>

<body>
	<div class="row justify-content-center align-items-center">
		<div class="col-md-4">
		<h1 class="text-center text-info"> Регистрация </h1>  <br/>
		<input type="text"			name="nickname"			placeholder="Ваше имя"					class="form-control" /><br/>
		<input type="text"			name="sutnickname"	placeholder="Ваша фамилия"			class="form-control"/><br/>
		<input type="text"			name="email"				placeholder="Email"							class="form-control"/><br/>
		<input type="password"	name="pword"				placeholder="Пароль"						class="form-control"/><br/>
		<input type="password"	name="pword1"				placeholder="Повторить пароль"	class="form-control"/><br/>
		<input type="submit"		value="Регистрация"	class="btn btn-success"/>	<br/>
		</div>
	</div>
		<div class='result'></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script>window.JQuery || document.write('<script src="js/jquery-3.1.1.min.js"><\/script>');</script>
<script src='js/script.js'></script>
</body>
</html>
