<?php
if(isset($_COOKIE['mac'])){
	header("Location: /hidro-esp-srv/read.php"); /* Redirect browser */

    /* Make sure that code below does not get executed when we redirect. */
    exit;
}else{
	header("Location: /hidro-esp-srv/login.html"); /* Redirect browser */

    /* Make sure that code below does not get executed when we redirect. */
    exit;
}
?>