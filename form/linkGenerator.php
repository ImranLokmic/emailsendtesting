<?php
class LinkGenerator {
    public function __construct(private string $email) {}

    public function generateLink(): string {
        return "form/generate_form_page.php?email=" . urlencode($this->email);
    }
}
?>
