<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="/main/index">
				<?php
				if (isset($_SESSION['login'])){
				echo $_SESSION['login'];
				}else{
					echo "NoAuth";
				}
				?>
			</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="/main/index">Домой </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/contacts/index">Контакты</a>
		      </li>
					<li>
						<a class="nav-link" href="/news/index">Новости</a>
					</li>
					<?php if(isset($_SESSION['isAdmin'])== true) {?>
						<li>
								<a class="nav-link" href="/User/AdminPanel">редактирование пользователей</a>
						</li>
					<?php } ?>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">направления</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="/services/index">Услуги</a>
		          <a class="dropdown-item" href="/portfolio/index">Портфолио</a>
		          <!-- <div class="dropdown-divider"></div> -->
		        </div>
		      </li>
		    </ul>
				<?php if (isset($_SESSION['login'])){ ?>
					<ul class="navbar-nav col-1">
						<li>
								<a class = "nav-link" href="/User/exit">выйти</a>
						</li>
					</ul>

				<?php }else{ ?>
					<ul class="navbar-nav col-3">
						<li>
							<a class="nav-link" href="/User/index">Войти</a>
						</li>
						<li>
								<a class = "nav-link" href="/User/registrationPage" >Регистрация</a>
						</li>
					</ul>
				<?php } ?>
		  </div>
		</nav>
			<?php include_once 'application/views/'.$content_view; ?>
    </div>
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
