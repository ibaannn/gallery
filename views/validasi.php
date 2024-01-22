<?php

error_reporting(E_ALL ^ E_NOTICE);
include_once "../controllers/c_login.php";

if (empty($_SESSION['Username'])) {
    echo "";
} else {
    header("Location: ../index.php");
}
