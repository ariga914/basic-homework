<?php 
abstract class Emailer 
{
    // Declare properties
    protected $sender;
    protected $recipients;
    protected $subject;
    protected $body;

    // Use Constructor to initialize sender and recipients
    function __construct($sender)
    {
        $this->sender = (object)$sender;
        $this->recipients = array(); 
    }

    public function addRecipients($recipient)
    {
        array_push($this->recipients, $recipient);
        return $this;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }
}

// Implement method sendEmail for SendGrid and MailChimp

class SendGrid extends Emailer 
{
    public function sendEmail()
    {
        foreach ($this->recipients as $recipient) {
            $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
            echo "SendGrid successfully sent to {$recipient}\n";
            echo "Sender: $this->sender\n";
            echo "Subject: $this->subject\n";
            echo "Content: $this->body\n";
        }
    }
}

class MailChimp extends Emailer 
{
    public function sendEmail()
    {
        foreach ($this->recipients as $recipient) {
            $result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
            echo "MailChimp successfully sent to {$recipient}\n";
            echo "Sender: $this->sender\n";
            echo "Subject: $this->subject\n";
            echo "Content: $this->body\n";
        }
    }
}
//test for sendGrid
$sgEmailer = new SendGrid("youremail@yourdomain.com");
$sgEmailer->addRecipients("emailID@domain.com")->setSubject("Just a Test")->setBody("Hi Name, How are you?")->sendEmail();
//test for MailChimp
$mcEmailer = new MailChimp("youremail@yourdomain.com");
$mcEmailer->addRecipients("emailID@domain.com")->setSubject("Just a Test")->setBody("Hi Name, How are you?")->sendEmail();

?>
