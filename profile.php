<!DOCTYPE html>
<html lang="en">

<?php

require 'config.php';

$name = $_POST['name'];
$password = $_POST['password'];

// If they post their correct user and password
if (isset($_POST['login']) == true) {
    header("Location: profile.php");
    exit;
} else {
    // If user leaves email or password empty
    if (empty($name) || empty($password)) {
        //header("Location: index.html?error=emptyfield&email=".$email."&password=".$email);
        header("Location: index.php");
    }
}


// IF THEY POST A QUOTE, INPUT A SUCCESS NOTIFICATION AND SHOW THEIR QUOTE BELOW.

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
    <title>Movie Quotes</title>
</head>

<body>
    <h1>Profile</h1>
    <h2>Hello <?php echo $name ?></h2>
    <section>
        <div class="form-wrapper">
        <h3>Enter Your Favorite Quote</h3>
        <form action="profile.php" method="get">
            <p>Quote:</p><input type="text" name="quote"><br>
            <p>Author/Speaker:</p><input type="text" name="author"><br><br>
            <input type="button" value="Submit" id="newquote">
        </form>
        </div>
        <div class="logout">
            <button type="submit">Log Out</button>
        </div>
    </section>
    <section>
    <h3>Quotes You've Entered:</h3>
    <?php 
    // SHOW QUOTES THEY'VE ENTERED
     ?>
    </section>
</body>

</html>