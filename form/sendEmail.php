<?php

require_once 'getFormData.php'; // Assuming the class is defined in this file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = new getFormData($_POST['email'], $_POST['title'], $_POST['text']);
    $form->sendData();
}