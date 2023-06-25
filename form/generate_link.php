<?php
require_once 'LinkGenerator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $generator = new LinkGenerator($_POST['email']);
    $link = $generator->generateLink();
    echo "Here is your link: <a href='../$link'>Go to Form</a>";
}
?>
