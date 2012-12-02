<?php
session_start();
class Model_Edit_Login extends Model
{
    public function get_data()
    {
        include ("db.php");

        $login = $_POST['login']; 
        $login_r = $_POST['login_r'];
        if($login!=$login_r) 
        {
            ?>
            <div><p align="center" class="text-error">Логины не совпадают..</p></div>
            <?php
            exit;
        }

        $id = $_SESSION['id'];
        $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db->base);
        $array = mysql_fetch_array($result);
        if (!empty($array['id'])) 
        {
            ?>
            <div><p align="center" class="text-error">Введённый вами логин уже зарегистрирован.</p></div>
            <?php
            exit;
        }

        mysql_query("UPDATE `Users` SET `login` ='$login' WHERE `id` = '$id'"); 
        $_SESSION['login'] = $login;
        
        exit("<html><head><meta http-equiv='Refresh' content='0; URL=/'></head></html>");        
    }
}