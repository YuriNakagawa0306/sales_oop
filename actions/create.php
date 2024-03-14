<?php

include '../classes/User.php';

$user = new User;

$user->create($_POST);