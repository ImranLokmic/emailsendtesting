<?php

class getFormData{
    public function __construct(
        public string $email,
        public string $title,
        public string $text
    ) {
        $this->email = $_POST['email'] ?? '';
        $this->title = $_POST['title'] ?? '';
        $this->text = $_POST['text'] ?? '';
    }

    public function sendData(){
        if($this->validateData()){
            $this->sendEmail();
        }
    }

    // TODO: Create more validation
    private function validateData(){
        // Validate email
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            return false;
        }

        // Validate title
        if (empty($this->title)) {
            echo "Title is required";
            return false;
        }

        // Validate text
        if (empty($this->text)) {
            echo "Text is required";
            return false;
        }

        // If all validations pass
        return true;
    }


    // TODO: need to configure mail catcher or somth for local dev
    private function sendEmail(){
        $to = $this->email;
        $subject = $this->title;
        $message = $this->text;

        // TODO: Replace from/reply-to emails
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send email
        if(mail($to, $subject, $message, $headers)){
            echo "Email sent successfully";
        }else{
            echo "Email sending failed";
        }
    }

}
?>
