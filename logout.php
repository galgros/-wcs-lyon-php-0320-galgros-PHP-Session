<?php require 'inc/head.php'; ?>
<?php

session_destroy();
session_unset();

header('Location: /');
