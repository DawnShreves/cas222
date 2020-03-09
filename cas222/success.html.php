<!DOCTYPE html>
<html lang="en">

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
    <h1>Thank you!</h1>
    <p>Our records show you submitted the following:<br>
        First Name: <?php echo htmlspecialchars($myFname, ENT_QUOTES,'UTF-8'); ?><br>
        Last Name: <?php echo htmlspecialchars($myLname, ENT_QUOTES, 'UTF-8'); ?><br>
        Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
        Address: <?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?><br>
        City: <?php echo htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?><br>
        State: <?php echo htmlspecialchars($state, ENT_QUOTES, 'UTF-8'); ?><br>
        Zip: <?php echo htmlspecialchars($zip, ENT_QUOTES, 'UTF-8'); ?><br>
        Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
        Phone: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br>
        Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
        Saturday: <?php echo htmlspecialchars($SaturdayEvent, ENT_QUOTES, 'UTF-8'); ?><br>
        Role: <?php echo htmlspecialchars($SaturdayRole, ENT_QUOTES, 'UTF-8'); ?><br>
        Sunday: <?php echo htmlspecialchars($SundayEvent, ENT_QUOTES, 'UTF-8'); ?><br>
        Role: <?php echo htmlspecialchars($SundayRole, ENT_QUOTES, 'UTF-8'); ?><br>
        Accommodations: <?php echo htmlspecialchars($myAccommodations, ENT_QUOTES, 'UTF-8'); ?><br>
        Emergency Contact: <?php echo htmlspecialchars($eContact, ENT_QUOTES, 'UTF-8'); ?><br>
        Emergency Phone: <?php echo htmlspecialchars($ePhone, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>
</main>
<?php include 'includes/footer.inc.html.php'; ?>
</body>
</html>