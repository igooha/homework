<?php

class Controller_Check_Reg extends Controller
{

    function __construct()
    {
        $this->model = new Model_Check_Reg();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
    }
    
}
