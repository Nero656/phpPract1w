<div class="container col-10">
	<div class="row">
			<h1>Портфолио</h1>
			<h4>Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.</h4><p>
			<table class="table table-bordered"><br>
			<?php if (isset($_SESSION['login'])&& isset($_SESSION['isAdmin'])== true){ ?>
			<tr>
				<td>Год</td>
				<td>Проект</td>
				<td>Описание</td>
				<td>изменить</td>
				<td>удалить</td>
			</tr>
			<?php }else{ ?>
				<tr>
					<td>Год</td>
					<td>Проект</td>
					<td>Описание</td>
				</tr>
			<?php
			}
				if (isset($_SESSION['login']) && isset($_SESSION['isAdmin'])== true){
					foreach($data as $row){?>
						<tr>
							<form action="/portfolio/edit" method="post">
							<td><input type="text" name="Year" class = "form-control" value="<?php echo $row['Year'];?>"> </td>
							<input type="text" name="Id" class = "invisible"  value="<?php echo $row['id']; ?>">
							<td><input type="text" name="Project" class = "form-control" value="<?php echo $row['Project'];?>"></td>
							<td><input type="text" name="Description" class = "form-control" value="<?php echo $row['Description']; ?>"></td>
							<td>
							<input type="submit" class="form-control btn btn-dark" value="Изменить">
							</form>
							</td>
							<td>
								<a class="form-control btn btn-danger" href="/portfolio/delete/?id=<?php echo $row['id']; ?>">Удалить</a>
							</td>
						</tr>
				<?php }?>
				<form method="post" action="/portfolio/add">
				<td><input type="text" name="Year" class = "form-control" value="<?php echo $row['Year'];?>"> </td>
				<td><input type="text" name="Project" class = "form-control" value=""></td>
				<td><input type="text" name="Description" class = "form-control" value=""></td>
				<td colspan="2">
				<input type="submit" class="form-control btn btn-dark" value="добавить">
				</form>
			<?php }else{
				foreach($data as $row){?>
						<tr>
							<td><?php echo $row['Year']; ?></td>
							<td><?php echo $row['Project']; ?></td>
							<td><?php echo $row['Description']; ?></td>
						</tr>
					<?php }
				}
			?>
			</table>
		</div>
	</p>
</div>
