<!DOCTYPE html>
<html lang="en">
<?php 

require 'config.php';
require 'quoconfig.php';

// Going into quotelist database and producing a query to grab values
$quote = "SELECT * FROM quotelist ORDER BY RAND()";
$quoteresult = $quoConn->query($quote);
$quoterow = $quoteresult->fetch_assoc();

// Set variables for name and password to add safety
$name = '';
$name = htmlspecialchars( strip_tags($name));
$email = '';
$email = htmlspecialchars( strip_tags($email));
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
        // This is where the quotes are posted
        echo $quoterow['quote'] . "<br>";
        echo $quoterow['author'];
        ?></h2>

    </section>
    <section>
        <!-- FORM FOR LOGGING IN -->
        <div class="form-wrapper">
            <h4>Log In and Post Your Favorite Quote</h4>
            <form action="<?php echo htmlspecialchars("profile.php");?>" method="post">
                <p>Name:</p><input type="text" name="name" id="name" placeholder="gabytest" value="<?php echo $name;?>" require><br>
                <p>Password:</p><input type="password" name="password" id="password" placeholder="test" value="<?php echo $email; ?>" require><br><br>
                <input type="submit" value="Log In" id="login">
            </form>
            <p><a class="register" href="register.php">Register Here</a></p>
        </div>
    </section>
</body>
</html>