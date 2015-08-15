<?php
/**
 * Created by PhpStorm.
 * User: Anass
 * Date: 03/02/2015
 * Time: 19:41
 */
// return script path
function pg(){

    $server = $_SERVER['HTTP_HOST'];
    if($server == 'localhost')
        return dirname($_SERVER['SCRIPT_NAME']).'/';
    else
        return 'http://'.$_SERVER['HTTP_HOST'].'/mvc/';
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Page Not Found</title>
    <link type="text/css"  href="<?php echo host(); ?>/css/style.css"  rel="stylesheet" />
    <script type="text/javascript" src="<?php echo host();?>/js/app.js"></script>
</head>
<body>
	<section>
		<h1>Page Not Found</h1>
		<p>Back to the <a href="<?php echo pg(); ?>home">Home</a> page</p>
	</section>
</body>
</html>