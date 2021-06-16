<?php
if(isset($_COOKIE['mac'])){
	header("Location: /read.php"); /* Redirect browser */

    /* Make sure that code below does not get executed when we redirect. */
    exit;
}else{
	header("Location: /login.html"); /* Redirect browser */

    /* Make sure that code below does not get executed when we redirect. */
    exit;
}
?>