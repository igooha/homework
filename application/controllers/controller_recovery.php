<?php

class Controller_Recovery extends Controller
{

    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
        $this->view->generate('recovery_view.php', 'template_view.php', $data);
    }
    
}
