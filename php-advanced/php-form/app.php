<?php
require_once("dto/UserDto.php");

$userEmail=$_POST["email"];
$userPassword=$_POST["password"];
UserDto::create($userEmail,$userPassword);
header("Location:http://localhost/php/php-form/?email=$userEmail");