<?php
class Model
{
	public function __construct()
    {
        mysqli_set_charset($this->link = new mysqli(
            $GLOBALS['host'],
            $GLOBALS['user'],
            $GLOBALS['password'],
            $GLOBALS['database']
        ), 'utf8');
    }
	public function get_date()
	{

	}
}

?>
