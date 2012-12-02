<?php

class Model_Check_Reg extends Model
{
    public function get_data()
    {
        include ("db.php");

        $login = $_POST['login'];
    	$password = $_POST['password'];
    	$password_r = $_POST['password_r'];
    	$email = $_POST['email'];

    	if($password != $password_r)
    	{
        	echo "Ошибка! Пароли не совпадают.";
        	exit;
    	}

    	$result = mysql_query("SELECT id FROM users WHERE login='$login'",$db->base);
    	$array = mysql_fetch_array($result);

    	if (!empty($array['id'])) 
    	{
        	echo "Извините, введённый вами логин уже зарегистрирован. Введите другой логин.";
        	exit;
    	}

    	$result = mysql_query("INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");


    	if ($result)
    	{
    		echo "Вы успешно зарегистрированы" ;
    		exit("<html><head><meta http-equiv='Refresh' content='0; URL=/login'></head></html>");
    	}
		else 
			echo "Ошибка! Вы не зарегистрированы.";
    }
}