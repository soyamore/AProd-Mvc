<?php
require_once("core/include.php");
// get the name of page requested
@$page = $_GET['page'];
// remove spaces
$page = trim($page,'/');
// make page as array
$page = explode('/',$page);

// return script path
function host(){

    $server = $_SERVER['HTTP_HOST'];
    if($server == 'localhost')
        return dirname($_SERVER['SCRIPT_NAME']).'/view';
    else
        return 'http://'.$_SERVER['HTTP_HOST'].'/mvc/view';
}
// get page name
$file = 'controller/'.$page[0].'.php';
// check if file exist
if(file_exists($file)){
    // if page exist get the page
    require_once($file);
    new $page[0]();
}
elseif($page[0] == '' || $page[0] == 'home'){
    // if page requested is http://www.name.com get index
    $file = 'controller/index.php';
    require_once($file);
    new index();
    host();
}else{
    // if nothing match get error page
    $file = 'controller/error.php';
    require_once($file);
    new error();
}


?>