<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{
		$query = 'SELECT * FROM portfolio';

    $result = mysqli_query($this->link, $query);
		return $result;
	}

	 public function delete($id)
	{
		$query = "DELETE FROM portfolio WHERE id = '$id'";
		$result = mysqli_query($this->link, $query);
		return $result;
	}

	public function edit($Year ,$Project ,$Description, $Id)
	{
		// $query = "INSERT INTO `portfolio` (`id`, `Year`, `Project`, `Description`) VALUES (NULL, '$Year', '$Project', '$Description')";
		$query = "UPDATE portfolio SET Year = '$Year', Project = '$Project', Description = '$Description' WHERE id = '$Id'";
		$result = mysqli_query($this->link, $query);
		return $result;
	}
	public function add($Year ,$Project ,$Description, $Id)
	{
		$query = "INSERT INTO `portfolio` (`id`, `Year`, `Project`, `Description`) VALUES (NULL, '$Year', '$Project', '$Description')";
		$result = mysqli_query($this->link, $query);
		return $result;
	}
}

?>
