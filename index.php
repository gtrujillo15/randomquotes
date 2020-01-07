<!DOCTYPE html>
<html lang="en">
<?php 

require 'quoconfig.php';

// Quote
$quote = "SELECT * FROM quotelist ORDER BY RAND()";
$quoteresult = $quoConn->query($quote);
$quoterow = $quoteresult->fetch_assoc();

$quoConn->close();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Movie/TV Quotes</title>
</head>
<body>
    <section>
        <h1>Random Quotes from Popular Movies/TV</h1>
        <h3>Refresh for a new quote!</h3>
        <h2><?php 
        // Place information about quotes
        echo $quoterow['quote'] . "<br>";
        echo $quoterow['author'];
        ?></h2>

    </section>
    <section>
        <div class="form-wrapper">
            <h4>Log In and Post Your Favorite Quote</h4>
            <form action="profile.php" method="post">
                <p>Name:</p><input type="text" name="name" id="name"><br>
                <p>Password:</p><input type="password" name="password" id="password"><br><br>
                <input type="submit" value="Log In" id="login">
            </form>
            <p><a class="register" href="register.php">Register Here</a></p>
        </div>
    </section>
</body>
</html>