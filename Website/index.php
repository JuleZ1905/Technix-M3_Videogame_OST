<?php

namespace M3_VideogameOST\Website;

use M3_VideogameOST\Website\Seeder;

require_once 'Seeder.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OST-Collection</title>
    <style>
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <h2>Input:</h2>
    <form method="get">
        <select name="OST_name" id="OSTs">
            <?php
            $jsonData = Seeder::seed();
            $arrKeys = array_keys($jsonData);
            $keysShortened;
            for ($i = 0; $i < count($arrKeys); $i++) {
            ?>
                <option value="<?php echo $arrKeys[$i] ?>"><?php echo $arrKeys[$i] ?></option>
            <?php
            }
            ?>
            <option value="all">All Songs</option>
        </select>
        <br>
        <button style="margin:15px" type="submit">Submit</button>
    </form>

    <?php

    if (isset($_GET['OST_name'])) {
        $enteredName = preg_replace('/[^a-zA-Z0-9]+/', '', $_GET['OST_name']);
        echo '<h2> JSON Output: </h2>';
        if (in_array($enteredName, $arrKeys)) {
            echo '<br>';
            echo '<pre>' . json_encode($jsonData[$enteredName], JSON_PRETTY_PRINT) . '</pre>';
        } else if ($enteredName == 'all') {
            echo '<pre>' . json_encode($jsonData, JSON_PRETTY_PRINT) . '</pre>';
        } else {
            echo '<h3> Input not valid </h3>';
        }
    }
    ?>

</body>

</html>