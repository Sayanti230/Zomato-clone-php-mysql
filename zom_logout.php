<?php
session_start();
session_destroy();
header('Location:zom_login.php');

?>