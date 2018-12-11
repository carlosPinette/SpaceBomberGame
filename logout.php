<?php
/*
@autor:Carlos Perera a01099559
@file: index.php
*/
session_start();
session_destroy();
header('Location:index.php');
?>