<?php
class Controller_Portfolio extends Controller
{
	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}


	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}

	function action_delete()
 	{
	 	if(isset($_GET['id']))
	 	{
	 	$id = $_GET['id'];
	 	$this->model->delete($id);
 		}
		header('Location:/portfolio/index');
	}

	function action_edit()
	{
		if(isset($_POST['Year']) || isset($_POST['Project']) || isset($_POST['Description']) || isset($_POST['Id'])&& isset($_SESSION['isAdmin']) == true)
	 	{
		$Year = filter_var(trim($_POST['Year'], FILTER_SANITIZE_STRING));
		$Project = filter_var(trim($_POST['Project'], FILTER_SANITIZE_STRING));
		$Description = filter_var(trim($_POST['Description'], FILTER_SANITIZE_STRING));
		$Id = $_POST['Id'];
	 	$this->model->edit($Year, $Project, $Description, $Id);
		header('Location:/portfolio');
 		}
	}
	function action_add()
	{
		if(isset($_POST['Year']) || isset($_POST['Project']) || isset($_POST['Description']) || isset($_POST['Id'])&& isset($_SESSION['isAdmin']) == true)
		{
			$Year = filter_var(trim($_POST['Year'], FILTER_SANITIZE_STRING));
			$Project = filter_var(trim($_POST['Project'], FILTER_SANITIZE_STRING));
			$Description = filter_var(trim($_POST['Description'], FILTER_SANITIZE_STRING));
			$Id = $_POST['Id'];
		 	$this->model->add($Year, $Project, $Description, $Id);
			header('Location:/portfolio');
	 		}
		}
	}

?>
