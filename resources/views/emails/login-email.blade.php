<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chisthi Chats Login OTP</title>
</head>

<body>
    <h1>
        Hello, {{ $mailData['name'] }}
    </h1>
    <p> Your OTP to login into Chisthi Chats is
    {{ $mailData['otp'] }}
    </p>
    <p>Thank you</p>
</body>

</html>
