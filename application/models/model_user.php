<?php
class Model_User extends Model
{
      public function get_UserList()
      {
        $query = 'SELECT * FROM `users`';
        $result = mysqli_query($this->link, $query);
        return $result;
      }

      public function isAuth() {
            if (isset($_SESSION["is_auth"])) {
                return $_SESSION["is_auth"];
            }
            else return false;
        }

      public function EditRole($role, $id)
      {
        $query = "UPDATE `users` SET `role` = '$role' WHERE id = '$id'";
    		$result = mysqli_query($this->link, $query);
    		return $result;
      }

      public function delete($id)
      {
        $query = "DELETE FROM `users` WHERE id = '$id'";
    		$result = mysqli_query($this->link, $query);
    		return $result;
      }

      public function auth($login, $password) {

        if (!empty($login) && !empty($password)){
        $result = mysqli_query($this->link,"SELECT * FROM `users` WHERE login = '$login' AND password = '$password'")->fetch_array();

          if($result != NULL)
          {
            return $result;
          }
        }
        else
        {
          header('Location:/User/index');
        }
      }

      public function registration($login, $email, $password)
      {

        if (!empty($login)&&!empty($email)&&!empty($password)){
      	   $query = "INSERT INTO users (`login`, `email`, `password`, `role`) VALUES ('$login', '$email', '$password', 'user')";
      	   $result = mysqli_query($this->link, $query);
      	   return $result;
        }
        else
        {
          header('Location:/User/registration');
        }
      }

      public function getLogin() {
          if ($this->isAuth()) {
              return $_SESSION["login"];
          }
      }
}
