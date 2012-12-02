<?php

class Controller_Check_Login extends Controller
{

    function __construct()
    {
        $this->model = new Model_Check_Login();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
