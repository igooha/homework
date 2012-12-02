<?php

class Controller_Reg extends Controller
{

    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
        $this->view->generate('reg_view.php', 'template_view.php', $data);
    }
    
}
