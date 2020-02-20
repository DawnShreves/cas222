<?php
if (isset($_POST['send']) && isset($_POST['email'])) {
    $to = 'dawn.shreves@pcc.edu';
    $subject = 'Ace in the Hole';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $headers .= "\r\nReply-To: $email";
        $success = mail($to, $subject, $message, $headers);
    }
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['comments'];
    $headers = "From: Ace in the Hole";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    $success = mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ace in the Hole - Thank you</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<main>
    <?php if (isset($success) && $success) { ?>
    <h1>Thank You</h1>

    <p> Hello <?php echo $_POST['name']; ?>!</p>
    <p>Your email has been sent.</p>
    <p>We will get back to you as soon as possible.</p>
    <?php } else{ ?>
    <h1>Oops!</h1>
    <p>Sorry, there was a problem sending your message</p>
    <?php } ?>
</main>

</body>

</html>