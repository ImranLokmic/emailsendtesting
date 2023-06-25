<?php
require_once 'FormPage.php';

if (isset($_GET['email'])) {
    $form = new FormPage($_GET['email']);
    $form->displayForm();
} else {
    echo "No email address provided.";
}
?>
