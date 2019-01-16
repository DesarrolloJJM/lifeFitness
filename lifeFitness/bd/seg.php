<?php
    session_start();
    $_SESSION['usuario']=$_REQUEST['email'];
    $_SESSION['password']=$_REQUEST['pass'];
    echo $_SESSION['usuario'];
    echo $_SESSION['password'];