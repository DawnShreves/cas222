<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ace in the Hole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php include 'includes/header.inc.html.php'; ?>

<?php include 'includes/nav.inc.html.php'; ?>

<main>
    <h1>Register</h1>
    <section class="row2">
        <aside class="column5">
    <form method="POST" action="register.php">
        <label for="myFname" class="info">First Name:</label>
        <input type="text" name="myFname" class="enter">
        <label for="myLname" class="info">Last Name:</label>
        <input type="text" name="myLname" class="enter">
        <label for="age" class="info" >Age:</label>
        <input type="number" name="age"><br>

        <label for="address" class="info">Address:</label>
        <input type="text" name="address">
        <label for="city" class="info">City:</label>
        <input type="text" name="city">
        <label for="state" class="info">State:</label>
        <input type="text" name="state"><br>
        <label for="zip" class="info">Zip:</label>
        <input type="text" name="zip">
        <label for="email" class="info">Email:</label>
        <input type="email" class="enter" name="email">

        <label for="phone" class="info">Phone:</label>
        <input type="text" name="phone"><br>

        <input type="checkbox" class="checkbox" name="gender" value="m">
        <label for="athlete">Male</label>
        <input type="checkbox" class="checkbox" name="gender" value="f">
        <label for="volunteer">Female</label>
        <input type="checkbox" class="checkbox" name="gender" value="n">
        <label for="information">Non binary</label><br>

        <label for="Saturday">Saturday events:</label>
        <select size="1" name="SaturdayEvent" id="event">
            <option value="none">None</option>
            <option value="long">Long Course Triathlon</option>
            <option value="olympic">Olympic Triathlon</option>
            <option value="ten">10K</option>
            <option value="half">Half Marathon</option>

        </select><br>
        <input type="checkbox" class="checkbox" name="SaturdayRole" value="a">
        <label for="athlete">Athlete</label>
        <input type="checkbox" class="checkbox" name="SaturdayRole" value="v">
        <label for="volunteer">Volunteer</label><br>

        <label for="Sunday">Sunday events:</label>
        <select size="1" name="SundayEvent" id="event">
            <option value="none">None</option>
            <option value="sprint">Sprint Triathlon</option>
            <option value="tryAtri">Try-a-Tri</option>
            <option value="splash">Splash n Dash</option>

        </select><br>

        <input type="checkbox" class="checkbox" name="SundayRole" value="a">
        <label for="athlete">Athlete</label>
        <input type="checkbox" class="checkbox" name="SundayRole" value="v">
        <label for="volunteer">Volunteer</label><br>

        <label for="accommodations">Special Accommodations:</label><br>
        <textarea rows="10" cols="45" name="myAccommodations" id="myAccommodations"></textarea><br>

        <label for="emergencyContact" class="info">Emergency Contact Name:</label><br>
        <input type="text" class="eContact" name="eContact">
        <label for="emergencyContact" class="info">Phone:</label>
        <input type="text" class="eContact" name="ePhone">

        <input id="mySubmit" type="submit" value="Submit">

    </form>
        </aside>
        <aside class="column6">
    <img id="regImg" src="images/ace9.jpg" alt="athletes riding handcycles" width="680">
        </aside>
    </section>
</main>
<?php include 'includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/jquery.slicknav.js"></script>
    <script>$('.menu').slicknav();</script>

</body>

</html>