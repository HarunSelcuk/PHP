<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href=""><img src="" alt=""></a>
        <form action="app.php" method="post">
            <input type="button" value="Login">
            <input type="button" value="Sign Up">
        </form>
    </header>
    <main>
        <section>
            <div>
                <div>
                    <form action="signup.php" method="post" id="SignUp">
                        <input type="text" name="username" placeholder="Username">
                        <input type="text" name="email" placeholder="Example@email.com">
                        <input type="password" name="password" id="password" placeholder="password">
                        <input type="submit" value="sign up">
                    </form>
                </div>
            </div>
            <div>
                <div>
                    <form action="login.php" method="post">
                        <input type="text" name="usernameandmail" placeholder="Username or mailadres">
                        <input type="password" name="password" id="password">
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
        </section>

    </main>
    <footer>

    </footer>
</body>
</html>