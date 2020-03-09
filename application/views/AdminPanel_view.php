<br><br><br>
<div class="container">

    <table  class="table table-bordered">
      <tr>
        <td>Логин</td>
        <td>email</td>
        <td>роль</td>
        <td>изменить</td>
        <td>удалить</td>
      </tr>
      <?php foreach ($data as $row): ?>
      <form action="/User/EditRole/" method="post">
      <tr>
        <td>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <?php echo $row['login']; ?>
        </td>
        <td>
          <?php echo $row['email']; ?>
        </td>
        <td>
          <select class="form-control" name = 'role'>
            <option><?php echo $row['role']; ?></option>
            <?php if ($row['role'] == 'admin') { ?>
              <option>user</option>
            <?php } else {?>
            <option>admin</option>
          <?php } ?>
          </select>
        </td>
        <td><input type="submit" class="form-control btn btn-dark" value="изменить"></td>
        <td><a class = "form-control btn btn-danger" href="/User/delete/?id=<?php echo $row['id'];?>">удалить</a></td>
        </form>
      </tr>
        <?php endforeach; ?>
    </table>
</div>
