<?php

class Controller_Change_Login extends Controller
{

    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
        $this->view->generate('change_login_view.php', 'template_view.php', $data);
    }
    
}
