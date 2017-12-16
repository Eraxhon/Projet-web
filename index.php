<?php
session_start();

if (!empty($_GET['page']) && is_file('./controllers/controller_'.$_GET['page'].'.php'))
{
    include './controllers/controller_'.$_GET['page'].'.php';
}

else
{
    include './controllers/controller_home.php';
}
?>