<?php
class Controller_News extends Controller
{
	function __construct()
	{
		$this->model = new Model_News();
		$this->view = new View();
	}

	function action_index()
	{
		$news = $this->model->get_news();
		$this->view->generate('news_view.php', 'template_view.php', $news);
	}

	function action_Page()
	{
		$comments = $this->model->get_comments();
		$this->view->generate('NewsPage_view.php', 'template_view.php', $comments);
	}

	function action_addPage()
	{
			$this->view->generate('newsRedact.php', 'template_view.php');
	}

	function action_editPage()
	{
		$this->view->generate('EditNews_view.php', 'template_view.php');
	}



	function action_edit()
	{
		if (isset($_POST['id']) || isset($_POST['title']) || isset($_POST['date']) || isset($_POST['text']))
		{
			 $title = filter_var(trim($_POST['title'], FILTER_SANITIZE_STRING));
			 $date = filter_var(trim($_POST['date'], FILTER_SANITIZE_STRING));
			 $text = filter_var(trim($_POST['text'], FILTER_SANITIZE_STRING));
		 	 $id = $_POST['id'];

			 $this->model->edit($title, $date, $text, $id);
		}
		header('Location: /news/index');
	}

	function action_commets()
	{
		if(isset($_POST['way'])){
			$way = $_POST['way'];
				if (isset($_POST['author']) && isset($_POST['title']) && isset($_POST['text']))
				{
				$author = $_POST['author'];
				$title = $_POST['title'];
				$text = $_POST['text'];

				$this->model->AddComent($author, $title, $text);
			}
		}
		header('Location:'.$way);
	}

	function action_add()
	{
		if (isset($_POST['title']) && isset($_POST['date']) && isset($_POST['text']) && isset($_POST['author']))
		{
			$title = filter_var(trim($_POST['title'], FILTER_SANITIZE_STRING));
			$text = filter_var(trim($_POST['text'], FILTER_SANITIZE_STRING));
			$author = filter_var(trim($_POST['author'], FILTER_SANITIZE_STRING));
			$date =  filter_var(trim($_POST['date'], FILTER_SANITIZE_STRING));

			$this->model->add($title, $date, $text, $author);
		}
		header('Location: /news/index/');
	}

	function action_CommentDelete()
	{
		if(isset($_POST['way'])){
			echo $way = $_POST['way'];
			if(isset($_POST['author']) && isset($_POST['id']))
		 	{
		 	$author = filter_var(trim($_POST['author'], FILTER_SANITIZE_STRING));
			$id = $_POST['id'];

		 	$this->model->CommentDelete($author, $id);
			}

		}
		header('Location:'.$way);
	}

	function action_delete()
	{
		if(isset($_GET['author']) && isset($_GET['id']))
	 	{
	 	$author = filter_var(trim($_GET['author'], FILTER_SANITIZE_STRING));
		$id = $_GET['id'];

	 	$this->model->delete($author, $id);
 		}
		header('Location: /news/index');
	}
}
?>
