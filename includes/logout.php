<?php

include_once 'session.php';

if (isset($_POST['logout'])) {
  unset($_SESSION['security']);
}

header('Location: /');
