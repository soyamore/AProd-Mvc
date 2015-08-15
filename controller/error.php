<?php
/**
 * Created by PhpStorm.
 * User: Anass
 * Date: 03/02/2015
 * Time: 19:45
 */
class error extends Controller{
    function __construct(){
        # code ..
        parent::__construct();
        // make google, yahoo...
        header('HTTP/1.0 302 Found');
        $this->request->render('404');
    }
}
?>