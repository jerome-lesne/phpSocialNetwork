<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/registerStyle.css" rel="stylesheet">
    </head>
    <body>
        <h1>Registration</h1>
        <form method="post">
            <div>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" value="" />
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="" />
            </div>
            <div>
                <label for="mail">E-Mail</label>
                <input type="text" name="mail" id="mail" value="" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" value="" />
            </div>
            <div>
                <input type="submit" name="submit" value="submit" />
            </div>
            <a href="/login">Back to Login</a>
        </form>
    </body>
</html>
