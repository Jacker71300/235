<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fact of the Day</title>
    <link rel="stylesheet" href="fact.css">
</head>
<body>
    <main>
        <h1>
            Jack's Daily Fact Page
        </h1>
        <hr>

        <?php
            $facts = array("A bolt of lightning contains enough energy to toast 100,000 slices of bread", 
            "You can hear a blue whale's heartbeat from two miles away", 
            "The inventor of the frisbee was turned into a frisbee after he died", 
            "One in three divorce filings include the word 'Facebook'",
            "The world's largest pyramid isn't in Egypt",
            "LBJ owned a water-surfing car",
            "Bottled water expiration dates are for the bottle, not the water");

            $datenumber = date('w');

            $date = date('l');

            echo "<h2>$date's Fact:</h2>";

            echo "<p id='fact'>$facts[$datenumber]</p>";
        ?>
    </main>
</body>
</html>