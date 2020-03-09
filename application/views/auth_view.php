<br>
<br>
<br>
<br>
<div class="container col-2">
 <div class = "row-center">
   <h1 class="display-5 col-2">Авторизация</h1>
   <?php if (isset($_SESSION["is_auth"]) == 2){?>
    <div class="alert alert-danger col-12" role="alert">
      <p>Ошибка авторизации:</p>
      <p>неверный логин или пароль</p>
    </div>
   <?php }?>
    <form  action="/User/auth" method="post" class="container-fluid" style="padding: 10px; border:solid #333A40 1px; border-radius:10px;" >
       <label for="recipient-name" class="col-form-label">Логин:</label>
       <input placeholder = "Логин" type = "text" name = "login" class = "form-control">
       <label for="recipient-name" class="col-form-label">Пароль:</label>
       <input placeholder = "Пароль"  class = "form-control" type = "password" name = "password"><br>
       <input type="submit" value="Войти" class = "form-control btn btn-dark" />
     </form>
   </div>
 </div>
