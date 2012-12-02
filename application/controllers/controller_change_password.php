<?php

class Controller_Change_Password extends Controller
{

    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
        $this->view->generate('change_password_view.php', 'template_view.php', $data);
    }
    
}
