<br><br>
<div class="container" style = "border:solid black 1px; border-radius: 5px;padding:18px;">
  <form action="/news/edit/"  method="post">
    <input type="text" style= "display:none" name="id" value="<?php echo $_GET['id']; ?>">
    <label>Оглавление:</label>
    <input type="text" class ="form-control" name="title" value="<?php echo $_GET['title']; ?>"><br>
    <label>Дата:</label>
    <input type="text" class ="form-control" name="date" value="<?php echo date("Y-m-d"); ?>"><br>
    <label>Содержание:</label>
    <input type="text" class ="form-control" name="text" value="<?php echo $_GET['text'];?>"><br>
    <input type="submit" class = "form-control btn btn-dark col-2" value="изменить">
  </form>
</div>
