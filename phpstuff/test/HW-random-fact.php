<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Fact</title>
    <link rel="stylesheet" href="fact.css">
</head>
<body>
    <main>
        <h1>
            Jack's Random Fact Page
        </h1>
        <hr>

        <h2>
            Random Fact:
        </h2>
        <?php
            $facts = array("A bolt of lightning contains enough energy to toast 100,000 slices of bread", 
            "You can hear a blue whale's heartbeat from two miles away", 
            "The inventor of the frisbee was turned into a frisbee after he died", 
            "One in three divorce filings include the word 'Facebook'",
            "The world's largest pyramid isn't in Egypt",
            "LBJ owned a water-surfing car",
            "Bottled water expiration dates are for the bottle, not the water");

            $number = rand(0, 6);

            echo "<p id='fact'>$facts[$number]</p>";
        ?>

        <form action="HW-random-fact.php" method="post">
            <input id="submit" type="submit" value="Get another Fact!">
        </form>
    </main>
</body>
</html>