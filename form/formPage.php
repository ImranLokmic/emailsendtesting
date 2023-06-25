<?php
class FormPage {
    public function __construct(private string $email) {}

    public function displayForm(): void {
        $email = htmlspecialchars($this->email, ENT_QUOTES, 'UTF-8');
        echo "<form action='sendEmail.php' method='post'>
            <input type='hidden' name='email' value='$email'>
            <label for='title'>Title</label>
            <input type='text' name='title' id='title' required>
            <label for='text'>Text</label>
            <input type='text' name='text' id='text' required>
            <button type='submit'>Submit</button>
        </form>";
    }
}
?>
