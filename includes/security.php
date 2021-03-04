<?php

include_once 'session.php';

if (!empty($_POST)) {
  if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($_POST['email'] === 'khalid.sookia@iknsa.com'
        && $_POST['password'] === 'paris') {
        $_SESSION['security'] = $_POST;

        header('Location: /dashboard.php');
        exit;
    }

    header('Location: /?error');
    exit;
  }
}
