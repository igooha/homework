<?php
session_start();

class Model_Save_Profile extends Model
{
    public function get_data()
    {
        include ("db.php");

        $id = $_SESSION['id'];

        if(!empty($_POST['date']))
        {
            $date = $_POST['date'];
            mysql_query("UPDATE `users` SET `bdate` ='$date' WHERE `id`='$id'");
        }

        if(!empty($_POST['self']))
        {
            $self = $_POST['self'];
            mysql_query("UPDATE `users` SET `self` ='$self' WHERE `id`='$id'"); 
        }

        if(!empty($_POST['city']))
        {
            $city = $_POST['city'];
            mysql_query("UPDATE `users` SET `city` ='$city' WHERE `id`='$id'");
        }

        if(!empty($_POST['sex']))
        {
            $sex = $_POST['sex'];
            mysql_query("UPDATE `users` SET `sex` ='$sex' WHERE `id`='$id'");
        }

        $id = $_SESSION['id'];
        
        echo "Изменения сохранены.";
        exit;
    }
}