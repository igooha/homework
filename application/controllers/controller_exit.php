<?php

class Controller_Exit extends Controller
{

    function __construct()
    {
        $this->model = new Model_Exit();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
