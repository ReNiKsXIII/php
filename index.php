<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'uzbek.php';
$user = new User();
$user->set('aaaaa', 'bbbb', '123');
$user->saveToSession();
$user->show();

?> 