<?php
$valid = true;
$userArray = array(
  array("Иван","Иванов","Admin@mail.ru","123456"),
  array("Юрий","Юров","Admin1@mail.ru","654321"),
  array("Илья","Ильнов","Admin2@mail.ru","321456"),
  array("Андрей","Андров","Admin3@mail.ru","123654")
);

if (!empty($_POST['nickname']) AND !empty($_POST['sutnickname']) AND !empty($_POST['email']) AND !empty($_POST['pword']) AND !empty($_POST['pword1'])){


	if ($_POST['pword'] != $_POST['pword1']) {
        echo '<script>alert ( "Пароль не совпадает!") </script>';

        $valid = false;
        }

  for ($i=0; $i < count($userArray); $i++) { 
			if ($_POST['email'] == $userArray [$i] [2]) {
            echo '<script>alert ( "Пользователь с таким Email уже существует" ) </script>';
			$valid = false;
			}
  		}


  if ($valid == true){
  //	array_push($userArray, array($_POST['nickname'], $_POST['sutnickname'], $_POST['email'], $_POST['pword']));  print_r($userArray); Используеться для проверки работоспособности
echo '<script>alert ( "Вы успешно зарегистрировались!" ) </script>';
}
} else {
   echo '<script>alert ("Заполните все поля!") </script>';
        }