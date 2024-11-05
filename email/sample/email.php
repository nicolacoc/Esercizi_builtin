<?php
const LINE_BREAK = "\r\n";
ini_set('smtp_port', 25);
ini_set('SMTP', 'localhost');

#SENDER
$sender = new stdClass();
$sender->name = "Nicola";
$sender->email = "niki@motoimco.it";
$sender->replyTO = "niki@motoimco.it";

#RECIPIENT
$recipient = new stdClass();
$recipient->name = "John Doe / Sender";
$recipient->email = "niki@motoimco.it";

$headers = array(
    'From' => "$sender->name <$sender->email>",
    'Reply-To' => "$sender->name <$sender->email>",
    'X-Mailer' => 'PHP/' . phpversion()
);

$subject = "Test email";

$message = "Hello {$recipient->name}"
. LINE_BREAK. "Come stai??";
$message = wordwrap($message, 70, "\r\n");

$mailSendingResult = mail($recipient->email, $subject, $message, $headers );
if ($mailSendingResult) {
    echo "Mail sent!";
}else{
    echo "Mail not sent!";
}