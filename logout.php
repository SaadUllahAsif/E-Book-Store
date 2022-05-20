<?php
    require("connect.php");
    session_destroy();
    header("location:hello.php");
?>