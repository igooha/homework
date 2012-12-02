<?php

class Controller_Send_Mail extends Controller
{

    function __construct()
    {
        $this->model = new Model_Send_Mail();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
