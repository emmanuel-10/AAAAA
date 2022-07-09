<?php
session_start();
if(isset($_SESSION['cliente'])){
    unset($_SESSION['cliente']);
    session_destroy();
}

header("Location: ../../index.php");