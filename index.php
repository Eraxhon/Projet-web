<?php
session_start();

if (!empty($_GET['page']) && is_file('controller_'.$_GET['page'].'.php'))
{
    include 'controller_'.$_GET['page'].'.php';
}

else
{
    include 'controller_home.php';
}

?>