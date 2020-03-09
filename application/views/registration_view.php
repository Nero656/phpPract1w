<br>
<br>
<br>
<br>
<div class="container col-2">
 <div class = "row-center">
   <h1 class="display-5 col-2">Регистрация</h1>
   <?php if (isset($_SESSION["is_auth"]) == 2){?>
    <div class="alert alert-danger col-12" role="alert">
      <p>Ошибка регистрации:</p>
      <p>неверный логин или пароль</p>
    </div>
    <?php }?>
  </div>
  </div>
<form action="/User/registration" method="post" class="container col-2 reg" style="padding: 10px; border:solid #333A40 1px; border-radius:10px;" >
  <label>login:</label>
  <input type="text" class = "form-control" name="login" value="">
  <label>email:</label>
  <input type="text" class = "form-control" name="email" value="">
  <label>password:</label>
  <input type="password" class = "form-control" name="password" value="">
  <br>
  <input type="submit" class = "form-control btn btn-dark" value="Зарегистрироваться">
</form>
