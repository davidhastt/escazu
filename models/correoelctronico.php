<?php

class CorreoElectronico {

    public $to;
    public $subject;
    public $message;
    public $headers;

    public function __construct($to, $subject, $message) {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <atencionweb@ixtapandelasal.com.mx>' . "\r\n";
        $headers .= 'Cc: davidhastt@gmail.com' . "\r\n";
        $this->headers=$headers;
        $this->to=$to;
        $this->subject=$subject;
        $this->message=$message;
    }

    public function sendMail() {
        if (mail($this->to, $this->subject, $this->message, $this->headers)) {
            return true;
        } else {
            return false;
        }
    }

}
