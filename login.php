<?php
function verifie($value){
    $value = strip_tags($value);
    $value = str_replace($value,"<script>","");
    $value = str_replace($value,"insert","");
    $value = str_replace($value,"update","");
    $value = str_replace($value,"delete","");
    $value = str_replace($value,"where","");
    $value = str_replace($value,"any","");

    return $value;
}
if(isset($_POST['sub'])){


}
phpinfo();
@$password = password_hash('givmy',PASSWORD_BCRYPT,array('cost'=> 10));
echo $password;
?>

<!DOCTYPE HTML>
<html>
<head></head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="uname" placeholder="username" />
    <input type="password" name="upass" placeholder="password" />
    <input type="submit" name="sub" value="go man" />
</form>
</body>
</html>