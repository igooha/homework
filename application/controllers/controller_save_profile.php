<?php

class Controller_Save_Profile extends Controller
{

    function __construct()
    {
        $this->model = new Model_Save_Profile();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
