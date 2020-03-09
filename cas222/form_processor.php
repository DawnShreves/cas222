<?php

if (isset($_POST['send']) and isset($_POST['email'])) {
    $to = 'dawn.shreves@pcc.edu';
    $subject = 'Ace in the Hole';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Role: ' . $_POST['role'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['comments'];
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $headers .= "\r\nReply-T0; $email";
    }
    $headers = "From: dawn.shreves@pcc.edu\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    $success = mail($to, $subject, $message, $headers, '-fdawn.shreves@pcc.edu');
 }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ace in the Hole - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.inc.html.php'; ?>
<?php include 'includes/nav.inc.html.php'; ?>
<main>
    <?php if (isset($success) && $success) { ?>
    <h1>Thank you!</h1>
    <p>Your message has been sent.</p><br>

    <?php } else { ?>
    <h1>Oops</h1>
    <p>Sorry, there was a problem sending your message.</p>
    <?php } ?>

</main>
<?php include 'includes/footer.inc.html.php'; ?>
</body>
</html>
