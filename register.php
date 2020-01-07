<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <title>Register with Movie Quotes</title>
</head>
<body>
    <section class="heading">
        <h2>Register with Movie Quotes</h2>
    </section>
    <section>
        <div class="form-wrapper">
            <h3>Registration</h3>
            <form action="profile.php" method="post">
                <p>Name:</p><input type="text" name="name" id="name"><br>
                <p>Email:</p><input type="text" name="email" id="email"><br>
                <p>Password:</p><input type="password" name="password" id="password"><br>
                <p>Confirm Password:</p><input type="password" name="password" id="passwordconfirm"><br><br>
                <input type="submit" value="Register" id="register">
                <p>*Please don't use your bank password. I didn't spend a lot on security.</p>
            </form>
        </div>
    </section>
</body>
</html>