<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Name: {{ $details['name'] }}</p>
    <p>Phone: {{ $details['phone'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Subject: {{ $details['subject'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
</body>
</html>