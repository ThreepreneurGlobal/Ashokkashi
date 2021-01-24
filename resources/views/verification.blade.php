<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirmation</title>
</head>
<body>
    <h1>Thank you for registering!</h1>

    <p>
    Click the following link to activate your account: <a href='{{ url('register/verification/' . $email_token) }}'>link Verification</a>
    </p>
</body>
</html>
