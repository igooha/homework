<?php

class View
{   
    function generate($content_view, $template_view, $data = 0)
    {
        include 'application/views/'.$template_view;
    }
}

?>