<?php
class Controller_Error extends Controller
{

	function __construct()
	{
		$this->model = new Model_Error();
		$this->view = new View();
	}

	function action_index()
	{
		$this->view->generate('error_view.php', 'template_view.php');
	}

}

?>
