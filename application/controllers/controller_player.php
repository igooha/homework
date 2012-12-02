<?php

class Controller_Player extends Controller
{

    function __construct()
    {
        $this->model = new Model_Player();
        $this->view = new View();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('player_view.php', 'template_view.php', $data);
    }
    
}
