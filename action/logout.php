<?php
require('../db_connect.php');
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
Header("Location:" . $url_path);
