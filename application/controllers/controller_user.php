<?php
class Controller_user extends Controller
{

	function __construct()
	{
		$this->model = new Model_User();
		$this->view = new View();
	}

	function action_index()
	{
		$this->view->generate('auth_view.php', 'template_view.php');
	}

	function action_AdminPanel()
	{
		$data = $this->model->get_UserList();
		$this->view->generate('AdminPanel_view.php', 'template_view.php', $data);
	}

	function action_registrationPage()
	{
		$this->view->generate('registration_view.php', 'template_view.php');
	}

	function action_EditRole()
	{
		if (isset($_POST['role'])&& isset($_POST['id'])&& isset($_SESSION['isAdmin']) == true)
		{
			$role = $_POST['role'];
			$id = $_POST['id'];

			$this->model->EditRole($role, $id);
		}
		header('Location:/User/AdminPanel');
	}

	function action_delete()
	{
		if (isset($_GET['id']))
		{
			$id = $_GET['id'];

			$this->model->delete($id);
		}
		header('Location:/User/AdminPanel');
	}

	function action_auth()
	{
		if(isset($_POST['login']) && $_POST['password'])
		{
			$login = filter_var(trim($_POST['login'], FILTER_SANITIZE_STRING));
		  $password =  filter_var(trim($_POST['password'], FILTER_SANITIZE_STRING));

			if(!empty($password)){$password = md5($password."asdfasf");}
			$auth = $this->model->auth($login, $password);
			//header('Location: /main/index');

			if ($auth != NULL)
			{
				$_SESSION["is_auth"] = true;
				$_SESSION["login"] = $auth['login'];
				setcookie('user', $user['login'], time()+3600*24, "/");
				if ($auth['role'] == 'admin')
				{
					$_SESSION['isAdmin'] = true;
				}
				header('Location:'.$host.'/');
			}
			else
			{
				$_SESSION["is_auth"] = 2;
				header('Location:/User/index');
			}

		}
		echo "<div class='alert alert-danger' role='alert'>
		<a href = '/auth/index'> Ошибка авторизации: поле логина или пароля пустое</a>
		</div>";
	}

	function action_registration()
	{
    if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']))
    {
      $login = filter_var(trim($_POST['login'], FILTER_SANITIZE_STRING));
  		$email = filter_var(trim($_POST['email'], FILTER_SANITIZE_STRING));;
  		$password =filter_var(trim($_POST['password'], FILTER_SANITIZE_STRING));

			if(!empty($password)){$password = md5($password."asdfasf");}

      $this->model->registration($login, $email, $password);

			$auth = $this->model->auth($login, $password);
			//header('Location: /main/index');

			if ($auth != NULL)
			{
				$_SESSION["is_auth"] = true;
				$_SESSION["login"] = $auth['login'];
				setcookie('user', $user['login'], time()+3600*24, "/");
				if ($auth['role'] == 'admin')
				{
					$_SESSION['isAdmin'] = true;
				}
				header('Location:'.$host.'/');
			}
			else
			{
				$_SESSION["is_auth"] = 2;
				header('Location:/User/registrationPage');
			}
		}
  }


	function action_exit()
	{
				session_destroy();
				header("Location:/main/index");//Редирект после выхода
	}
}

?>
