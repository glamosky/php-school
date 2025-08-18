<?php
$number = 1; // change this number
$max = 10;   // change to see how far the table goes
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Math Tables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .number, .max {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        table {
            border-collapse: collapse;
            margin: 20px;
            float: left;
            width: 200px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="number">Number: <?php echo $number; ?></div>
        <div class="max">Max: <?php echo $max; ?></div>
    </div>

    <!-- Addition Table -->
    <table>
        <tr><th colspan="3">Addition table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>
                    <td>$number + $i</td>
                    <td>=</td>
                    <td>" . ($number + $i) . "</td>
                  </tr>";
        }
        ?>
    </table>

    <!-- Subtraction Table -->
    <table>
        <tr><th colspan="3">Subtraction table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>
                    <td>$number - $i</td>
                    <td>=</td>
                    <td>" . ($number - $i) . "</td>
                  </tr>";
        }
        ?>
    </table>

    <!-- Multiplication Table -->
    <table>
        <tr><th colspan="3">Multiplication table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>
                    <td>$number X $i</td>
                    <td>=</td>
                    <td>" . ($number * $i) . "</td>
                  </tr>";
        }
        ?>
    </table>

    <!-- Division Table -->
    <table>
        <tr><th colspan="3">Division table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            $result = $number / $i;
            echo "<tr>
                    <td>$number / $i</td>
                    <td>=</td>
                    <td>" . $result . "</td>
                  </tr>";
        }
        ?>
    </table>

    <div class="clear"></div>

</body>
</html>
