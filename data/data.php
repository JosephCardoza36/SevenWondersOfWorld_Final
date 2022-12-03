<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $travel_preference = $_POST['travel_preference'];
    $accomodations = $_POST['accomodations'];
    $amount = $_POST['amount'];
    $contact = $_POST['contact'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
    <style>

        body {
            background: #FAF9F6;
            display: block;
            margin-left: 100px;
            margin-top: 100px;
        }


    </style>
</head>
<body>
    <h3> Thanks for submitting your form! We will be in touch soon about the lighthouse visit.</h3>
    <p>Firstname: <?php echo $firstname; ?></p>
    <p>Lastname: <?php echo $lastname; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone Number: <?php echo $phone; ?></p>
    <p>Travel Preference: <?php echo $travel_preference; ?></p>
    <p>Accomodations: <?php echo $accomodations; ?></p>
    <p>Amount Willing to Pay: <?php echo $amount; ?></p>
    <p>How to Contact You: <?php echo $contact; ?></p>

    
</body>
</html>