<?php

    session_start();
    include 'model/con.php';

    $_SESSION = array();
    session_destroy();
    header("Location: home.php");

exit;

?>





