<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/vhodak-2.css" />
  <title>Registrahen</title>
</head>
<body>
<?php if ($_COOKIE['user'] == ''):?>

<div class="container">
  <h1>Регистрация</h1>
  <form action="checkk.php" method="post">
    <div class="form-control">
      <input type="text" name="email">
      <label>Email</label>
    </div>
    <div class="form-control">
      <input type="password" name="pass">
      <label>Пароль</label>
    </div>
    <div class="form-control">
      <input type="text" name="name">
      <label>Имя</label>
    </div>

    <button tupe="submit" class="btn">Зарегестрироваться</button>
    <p class="text">
      Вернуться обратно? <a href="/php/vhod.php">Назад</a></p>
  </form>
</div>
<?php else: ?>
 <?php header('Location: /php/vhod.php'); ?>
<?php endif; ?>


<script src="/js/Registr.js"></script>

<div class="snowContainer">
	
	<div id="snow"></div>
	
</div> 
</body>
</html>
