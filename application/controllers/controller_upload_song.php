<?php

class Controller_Upload_Song extends Controller
{

    function __construct()
    {
        $this->model = new Model_Upload_Song();
        $this->view = new View();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('upload_song_view.php', 'template_view.php', $data);
    }
    
}
