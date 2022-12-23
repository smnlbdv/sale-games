<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/vhodak.css" />
    <link rel="stylesheet" href="/font-montserrat/Montserrat/stylesheet.css">
    <title>Авторизация</title>
  </head>
  <body>




<div class="container">
  <h1>Войти</h1>
    <form action="auch.php" method="post">
    <div class="form-control">
      <input type="text" name="email" >
      <label>Email</label>
    </div>
    <div class="form-control">
      <input type="password" name="pass">
      <label>Пароль</label>
    </div>
    <button class="btn">Авторизоваться</button>
    <p class="text">
      Нет учетной записи? <a href="/php/registr.php">Регистрация</a></p>
  </form>
</div>
<!-- /место для перехода на старницу дописать еще else -->






  <script src="/js/vhod-script.js"></script>
<div class="snowContainer">
  <div id="snow"></div>
</div> 
  </body>
</html>
