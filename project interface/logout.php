<?php
require 'core.php';
session_destroy();
header('Location: new_login.php');
?>