<br><br>
<div class="container">
 <h3><?php echo $_GET['title'];?></h3>
 <hr>
 <p><?php echo $_GET['text']; ?></p>
 <hr>
 <tables>
    <tr>
      <td>Автор статьи <?php echo $_GET['author'];?></p></td>

    </tr>
    <tr>
      <td class = "text-right"><p>дата публикации: <?php echo $_GET['data']; ?></p></td>
    </tr>
  </table>
  <hr>
  <h3>Комментарии</h3><br>
  <?php
  $way =$_SERVER['REQUEST_URI'];
  foreach ($data as $row){
  if ($_GET['title'] == $row['title']){?>
    <div  style = "border:solid black 1px; border-radius: 5px;padding:18px;">
      <h4><?php echo $row['author'];?></h4>
      <?php if (isset($_SESSION['login'])) { ?>
      <?php if ($_SESSION['login'] == $row['author'] || isset($_SESSION['isAdmin']) == true) { ?>
        <table>
        <tr>
            <!-- <a class="form-control btn btn-danger" href="/news/CommentDelete/?way=<?php //echo $way?>&id=<?php //echo $row['id'];?>&author=<?php //echo $row['author'];?>">Удалить</a> -->
            <form action="/news/CommentDelete/" method="post">
              <input name = "way" type="hidden" value="<?php echo $way?>">
              <input name = "author" type="hidden" value="<?php echo $row['author'];?>">
              <input name = "id"  type="hidden" value = "<?php echo $row['id'];?>">
              <input type="submit" class = "form-control btn btn-danger col-2" value="удалить">
            </form>
        </tr>
      </table>
      <?php } } ?>
      <hr>
      <p><?php echo $row['text'];?></p>
    </div>
    <br>
  <?php }
  }?>
  <hr>
    <?php if ( isset($_SESSION['login'])) { ?>
    <form action="/news/commets/" method="post">
      <input type="hidden" name = "way" value="<?php echo $way?>" >
      <input type="hidden"  name = "title" value = "<?php echo $_GET['title'];?>">
      <input  type="hidden" name = "author" value = "<?php echo $_SESSION['login'];?>">
      <label><?php echo $_SESSION['login'];?></label>
      <textarea name = "text" class = "form-control" name="coment" rows="4" cols="60"></textarea><br>
      <input type="submit" class = "form-control btn btn-dark col-2" value="комментаровать">
    </form><br>
  <?php } ?>
</div>
