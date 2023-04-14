<?php



class Cultural extends Controller
{
    function __construct()
    {
        parent::__construct();

        $this->view->mensaje = "";
    }

    function render()
    {
        $this->view->render('cultural/cultural');
    }

}

?>