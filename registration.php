<!-- //registration -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://fonts.googleapies.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="http://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
        <link rel="stylesheet" href="http://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        <link rel="stylesheet" href="goals.css">
        <title>MyGoals.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="body">
        <div class="container">
            <div class="header">
                <h2 style="color: white">Registration</h2>
            </div>
            <form action="check_register.php" method="post" style="padding: 20px">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for="pass">Password: </label>
                    <input type="password" name="pass" required>
                </div>
                <div>
                    <label for="conpass">Confirm Password: </label>
                    <input type="password" name="conpass" required>
                </div>
                <center><button type="submit">Submit</button></center>
                <center><p>Already a user? <a href="login.php"><b>Login</b></a></p></center>
            </form>
        </div>
    </body>
</html>