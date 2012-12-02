<?php
session_start();
class Model_Check_Login extends Model
{
    public function get_data()
    {
        include ("db.php");
        $login = $_POST['login']; 
        $password=$_POST['password'];

        $result = mysql_query("SELECT * FROM users WHERE login='$login'", $db->base);

        $array = mysql_fetch_array($result);

        if ($array['password'] == $password) 
        {
            $_SESSION['login'] = $array['login'];
            $_SESSION['id'] = $array['id'];
            exit("<html><head><meta http-equiv='Refresh' content='0; URL=/'></head></html>");
        }
        else 
        {
            echo 'Пользователя с таким логином и паролем не существует';
            exit;
        }
    }
}