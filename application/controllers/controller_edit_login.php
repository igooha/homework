<?php

class Controller_Edit_Login extends Controller
{

    function __construct()
    {
        $this->model = new Model_Edit_Login();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
