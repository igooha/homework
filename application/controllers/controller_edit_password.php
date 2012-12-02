<?php

class Controller_Edit_Password extends Controller
{

    function __construct()
    {
        $this->model = new Model_Edit_Password();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
