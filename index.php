<?php

require_once 'controller/testFunction.php';

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'deux') {
        Page2Affichage();
    }
} else {
    homePage();
}
