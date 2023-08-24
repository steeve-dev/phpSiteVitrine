<?php

require_once 'controller/testFunction.php';

switch ($_POST['action']) {
    case 'accueil':
        homePage();
        break;
    case 'contact':
        contactView();
        break;
    case 'reservation':
        reservationView();
        break;
    case 'about':
        aboutViews();
        break;
    default:
        homePage();
        break;
}



