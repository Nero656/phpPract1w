<br><br>
<div class="container" style = "border:solid black 1px; border-radius: 5px;padding:18px;">
  <form action="/news/add/"  method="post">
    <label>Оглавление:</label>
    <input type="text" class ="form-control" name="title"><br>
    <label>Дата:</label>
    <input type="text" class ="form-control" name="date" value="<?php echo date("Y-m-d"); ?>"><br>
    <label>Содержание:</label>
    <textarea type="text" class ="form-control" name="text"></textarea>
    <input type="text" style="display:none;" name="author" value="<?php echo $_SESSION['login'] ?>"><br>
    <input type="submit" class = "form-control btn btn-dark col-2" value="опубликовать">
  </form>
</div>
