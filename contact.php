<?php

if($_POST["submit"]) {
    $recipient="lgago@umich.edu";
    $subject="lgago.github.io Contact Me Form Response";
    $sender=$_POST["name"];
    $senderEmail=$_POST["Email"];
    $messageSubject=$POST["Subject"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\nSubject: $messageSubject\n $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>lgago.github.io `Contact Me Form` Response Received</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>
