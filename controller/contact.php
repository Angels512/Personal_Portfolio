<?php

    require_once('../config/conexion.php');
    require_once('../models/Contact.php');

    $contact = new Contact();

    switch ($_GET['op'])
    {
        case 'createContact':
            $contact->createContact($_POST['cont_name'], $_POST['cont_email'], $_POST['cont_subject'], $_POST['cont_message']);
        break;
    }

?>