<?php

$users = array(
	array(
		'email' => '1test@email.com',
		'name' => '1test',
		'surname' => '1test1',
		'password' => '11'
	),
	array(
		'email' => '2test@email.com',
		'name' => '2test',
		'surname' => '2test2',
		'password' => '22'
	),
	array(
		'email' => '3test@email.com',
		'name' => '3test',
		'surname' => '3test3',
		'password' => '33'
	),
	array(
		'email' => '4test@email.com',
		'name' => '4test',
		'surname' => '4test4',
		'password' => '44'
	)
);

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$check_password = $_POST['check_password'];

if ($password == $check_password) 
{
	foreach ($users as $users_email )
	{
		if ($email == $users_email['email'])
		{
			file_put_contents('error_email.log', json_encode($_POST,  JSON_UNESCAPED_UNICODE) . date("c") . PHP_EOL, FILE_APPEND);
			exit ('Данный email уже зарегестрирован');
		}
	}
	echo 'Вы успешно зарегестрированы';
}
else
{
	echo 'Пароли не совпадают';
}
?>