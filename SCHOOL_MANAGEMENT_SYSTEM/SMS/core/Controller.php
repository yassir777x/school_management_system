<?php 

class Controller {
    public function view($view , $data = []) {
        $viewFile = "../app/views/" . $view . ".php" ;
        require $viewFile ;
    }
}

?>