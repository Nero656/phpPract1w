<?php
class Model_News extends Model
{
  public function get_news()
  {
    $query = 'SELECT * FROM `news`';
    $result = mysqli_query($this->link, $query);
    return $result;
  }

  public function add($title,$data ,$text, $author)
  {
    $query = "INSERT INTO `news` (`title`, `date` ,`text`, `author`) VALUES ('$title', '$data', '$text', '$author')";
    $result = mysqli_query($this->link, $query);
    return $result;
  }

  public function get_comments()
  {
    $query = 'SELECT * FROM `comments`';
    $result = mysqli_query($this->link, $query);
    return $result;
  }

  public function AddComent($author, $title, $text)
  {
    $query = "INSERT INTO `comments` (`author`, `title`,`text`) VALUES ('$author', '$title', '$text')";
    $result = mysqli_query($this->link, $query);
    return $result;
  }

  public function edit($title, $date, $text, $id)
	{
    $query = "UPDATE news SET title = '$title', date = '$date', text = '$text' WHERE id = '$id'";
    $result = mysqli_query($this->link, $query);
    return $result;
	}

  public function CommentDelete($author, $id)
  {
   $query = "DELETE FROM `comments` WHERE `id` = '$id' AND `author` = '$author'";
   $result = mysqli_query($this->link, $query);
   return $result;
  }

  public function delete($author, $id)
  {
   $query = "DELETE FROM `news` WHERE `id` = '$id' AND `author` = '$author'";
   $result = mysqli_query($this->link, $query);
   return $result;
  }
}
?>
