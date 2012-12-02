<?php
session_start();

class Model_Exit extends Model
{
    public function get_data()
    {
        unset($_SESSION['password']);
        unset($_SESSION['login']); 
        unset($_SESSION['id']);
        exit("<html><head><meta http-equiv='Refresh' content='0; URL=/'></head></html>");
    }
}