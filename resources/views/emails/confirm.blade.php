<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Confirm your thanks</title>
</head>
<body>
  <h1>Thank you for signing up at Blog App！</h1>

  <p>
    Please click below URL to finish your signup：
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If you didn't sign up at Blog App, please ignore this email.
  </p>
</body>
</html>