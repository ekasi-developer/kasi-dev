<?php

define('WP_USE_THEMES', false);
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);

header('Content-Type', 'application/json');

require(BASE_PATH . '\wp-load.php');
require(BASE_PATH . '\wp-content\themes\kasi-dev\vendor\Valitron\Validator.php');

// global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;

$validator = new Valitron\Validator($_POST);

$validator->rules([
    'required' => ['name', 'email', 'subject', 'message'],
    'lengthMin' => [['name', 3], ['email', 3], ['subject', 10], ['message', 10]],
    'lengthMax' => [['name', 50], ['email', 50], ['subject', 50], ['500', 2500]],
    'email' => ['email']
]);

if($validator->validate() == false) {
    http_response_code(422);
    echo 'Invalid form data please enter corrent data.';
    return;
}

$data = $validator->data();
$to = 'thembangubeni04@gmail.com';
$subject = $data['subject'];

$user_name = ucfirst($data['name']);
$user_email = $data['email'];
$email_message = $data['message'];

$message = <<<EOD
<p>
    <span style="color:gray">Name:</span> {$user_name}
</p>
<p>
    <span style="color:gray">Sender Email:</span> <a href="mailto:{$user_email}">{$user_email}</a>
</p>
<p>
    <span style="color:gray">Subject</span>: {$subject}
</p>
<p>
    <span style="color:gray">Message</span>: {$email_message}
</p>
EOD;


$headers = ['Content-Type: text/html; charset=UTF-8'];


if(wp_mail($to , $subject, $message, $headers) == false) {
    http_response_code(422);
    echo 'Something went wrong went tring to send email please try again later.';
    return;
}

http_response_code(200);
echo 'OK';