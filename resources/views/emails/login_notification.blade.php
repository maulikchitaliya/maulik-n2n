<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login notification</title>
</head>

<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>You logged in on {{ $loginTime }}.</p>
</body>

</html>
