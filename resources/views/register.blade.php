<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "/css/bootstrap.min.css" rel = "stylesheet">
    <title><h1><b>Register</b></h1></title>
</head>
<body>
    <form method = "POST" action = "/auth/register">
        @csrf

        <div class = "register-form-group">
            <label for = "username">Username</label>
            <input type = "text" class = "register-form-control" id = "username" name = "username" required autofocus>
        </div>

        <div class = "register-form-group">
            <label for = "email">Email: </label>
            <input type = "email" class = "register-form-control" id = "email" name = "email" required>
        </div>

        <div class = "register-form-group">
            <label for = "address">Address: </label>
            <input type = "text" class = "register-form-control" id = "address" name = "address" required>
        </div>

        <div class = "register-form-group">
            <label for = "phone">Phone: </label>
            <input type = "text" class = "register-form-control" id = "phone" name = "phone" required>
        </div>

        <div class = "register-form-group">
            <label for = "password">Password: </label>
            <input type = "password" class = "register-form-control" id = "password" name = "password" required>
        </div>

        <div class = "register-form-group">
            <label for = "password-confirmation">Confirm Password: </label>
            <input type = "password" class = "register-form-control" id = "password-confirmation" name = "password-confirmation" required>
        </div>

        <div>
            <button type = "submit">Register</button>
        </div>
    </form>
</body>
</html>