<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=dawnshre_ace_in_the_hole', 'dawnshre_AITH_user', 'myP4ssw0rd20');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}

if (isset($_POST['myFname'])) {

    $myFname = $_POST['myFname'];
    $myLname = $_POST['myLname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $SaturdayEvent = $_POST['SaturdayEvent'];
    $SaturdayRole = $_POST['SaturdayRole'];
    $SundayEvent = $_POST['SundayEvent'];
    $SundayRole = $_POST['SundayRole'];
    $myAccommodations = $_POST['myAccommodations'];
    $eContact = $_POST['eContact'];
    $ePhone = $_POST['ePhone'];

    try {
        $sql = 'INSERT INTO register SET
          myFname = :myFname,
          myLname = :myLname,
          age = :age,
          address = :address,
          city =  :city,
          state = :state,
          zip = :zip,
          email = :email,
          phone = :phone,
          gender = :gender,
          SaturdayEvent = :SaturdayEvent,
          SaturdayRole = :SaturdayRole,
          SundayEvent = :SundayEvent,
          SundayRole = :SundayRole,
          myAccommodations = :myAccommodations,
          eContact = :eContact,
          ePhone = :ePhone';
        $s = $pdo->prepare($sql);
        $s->bindValue(':myFname', $_POST['myFname']);
        $s->bindValue(':myLname', $_POST['myLname']);
        $s->bindValue(':age', $_POST['age']);
        $s->bindValue(':address', $_POST['address']);
        $s->bindValue(':city', $_POST['city']);
        $s->bindValue(':state', $_POST['state']);
        $s->bindValue(':zip', $_POST['zip']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':phone', $_POST['phone']);
        $s->bindValue(':gender', $_POST['gender']);
        $s->bindValue(':SaturdayEvent', $_POST['SaturdayEvent']);
        $s->bindValue(':SaturdayRole', $_POST['SaturdayRole']);
        $s->bindValue(':SundayEvent', $_POST['SundayEvent']);
        $s->bindValue(':SundayRole', $_POST['SundayRole']);
        $s->bindValue(':myAccommodations', $_POST['myAccommodations']);
        $s->bindValue(':eContact', $_POST['eContact']);
        $s->bindValue(':ePhone', $_POST['ePhone']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted registration' . $e->getMessage();
        include 'error.html.php';
        exit();
    }
    include 'success.html.php';
    } else {
    header('register: .');
    include 'register.html.php';
    }

