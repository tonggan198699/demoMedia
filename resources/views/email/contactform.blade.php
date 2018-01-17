<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Email</title>

</head>
<body>
    <h1>Thank you for sending the email, {{ $contact['senderName'] }}</h1>
    <h3>From: {{ $contact['senderEmail'] }}</h3>
    <p>{{ $contact['message'] }}</p>

</body>
</html>
