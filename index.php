<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Регистрация</title>

</head>
<body>
	<div class="container p-3">
		<form id="form_ajax">
		<h2>Введите данные для регистрации</h2>
		<h3 class="text-danger" id="error"></h3>
			<div class="form-group">
				<label for="name">Имя</label>
				<input type="text" class="form-control" name="name" required>
				<label for="surname">Фамилия</label>
				<input type="text" class="form-control" name="surname" required>
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" required>
				<label for="password">Пароль</label>
				<input type="password" class="form-control" name="password" required>
				<label for="check_password">Повтор пароля</label>
				<input type="password" class="form-control" name="check_password" required>
			</div>
			<button type="submit" class="btn btn-primary">Отправить</button>
		</form>
		<h3 class="text-success" id="success"></h3>
	</div>
</body>

<script src="form_ajax.js"></script>