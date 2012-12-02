<?php
session_start();
class Model_Edit_Password extends Model
{
    public function get_data()
    {
        include ("db.php");

        $password = $_POST['password']; 
        $password_r = $_POST['password_r'];
        if($password!=$password_r) 
        {
            ?>
            <div><p align="center" class="text-error">Пароли не совпадают..</p></div>
            <?php
            exit;
        }

        $id = $_SESSION['id'];

        mysql_query("UPDATE `Users` SET `password` ='$password' WHERE `id` = '$id'"); 
        
        exit("<html><head><meta http-equiv='Refresh' content='0; URL=/'></head></html>");        
    }
}