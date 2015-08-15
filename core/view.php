<?php
class View{
    // this variable to check if the page not requested before
    var $rendered = false;
    public function render($page){
        // check if the function already used (to make the page don't be requested more than one time)
        if($this->rendered) return false;
        // get the page path
        $file = 'view/'.$page.'.php';
        // require the page
        require($file);

        // after use the page make rendered true
        $this->rendered = true;
    }
}