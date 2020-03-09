<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Ace in the Hole - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    
<body>

        <?php include 'includes/header.inc.html.php'; ?>

        <?php include 'includes/nav.inc.html.php'; ?>

    <main>

        <h1>Contact</h1>
        <section class="row2">
            <aside class="column5">
        <form method="POST" action="form_processor.php" id="contact" name="input">
            <input type="hidden" name="Dawn" value="dawn.shreves@pcc.edu">
           <label name="myFname" class="info">First Name:</label>
            <input type="text" name="name"><br>

           <label name="myLname" class="info">Last Name:</label>
           <input type="text" name="myLname"><br>

           <label for="email" class="info">Email:</label>
           <input type="email" name="email"><br>

            <label>Choose one:  </label>
           <select size="1" name="role">
               <option>Athlete</option>
               <option>Volunteer</option>
               <option>Interested Party</option>
           </select><br><br>

           <label for="comments">Question:</label><br>
           <textarea rows="10" cols="45" name="comments" id="comments"></textarea>

           <input id="mySubmit" type="submit" value="Submit" name="send">

       </form>
            </aside>
            <aside class="column8">
    <img id="conImg" src="images/ace10.jpg" alt="Finish line" width="680">
            </aside>
        </section>
    </main>

        <?php include 'includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/jquery.slicknav.js"></script>
    <script>$('.menu').slicknav();</script>
    
</body>
    
</html>