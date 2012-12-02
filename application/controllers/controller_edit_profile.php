<?php

class Controller_Edit_Profile extends Controller
{

    function __construct()
    {
        $this->model = new Model_Edit_Profile();
        $this->view = new View();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('edit_profile_view.php', 'template_view.php', $data);
    }
    
}
