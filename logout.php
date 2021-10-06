<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['phone']);
unset($_SESSION['address']);




header("Location: ./login.php");
