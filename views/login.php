<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/loginStyle.css" rel="stylesheet">
    </head>
    <body>
        <h1>Connect</h1>
        <form method="post">
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
            <a href="/register">if you don't have an account create one</a>
        </form>
    </body>
</html>
