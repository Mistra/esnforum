<h1> Dashboard! </h1>

<?php

require ("models/user.php");

$current = new user;
$current->create("io", "mio", "zio");
$mapper = new userMapper($current);
$mapper->map();