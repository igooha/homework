<?php

class Model_Edit_Profile extends Model
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
        }
        else 
        {
            echo 'Введённый вами логин или пароль неверный.';
            exit;
        }
    }
}