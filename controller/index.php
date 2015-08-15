<?php
/**
 * Created by PhpStorm.
 * User: Anass
 * Date: 03/02/2015
 * Time: 18:56
 */
class index extends Controller{
    function __construct(){
        # code ..
        parent::__construct();
        header('HTTP/1.0 301 Moved Permanently');
        $this->request->render('index');
    }
}


?>