<?php
/*
 * Name: Peter Eang
 * Date: 15/4/2021
 * File: index.php
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('functions.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Programming 2</title>
</head>
<body>
    <h1>Pair Programming 2</h1>
    <?php
        // Step 1
        echo "<p>PHP Array Practice</p>";

        // Step 2
        $numbers = array(7, 9, 8, 9, 8, 8, 6);

        printArr($numbers);
        echo "<br />";
        largest($numbers);
    ?>
</body>
</html>