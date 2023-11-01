<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Räkna dagar till nästa fredag</h1>
        <?php
        if (isset($_POST['selected_date'])) {
            $selected_date = $_POST['selected_date'];

            $selected_timestamp = strtotime($selected_date);

            $day_of_week = date('w', $selected_timestamp);

            $days_until_friday = (5 - $day_of_week + 7) % 7;

            if ($days_until_friday == 0) {
                echo '<img src="friday.gif" alt="Det är fredag!">';
            } else {
                echo '<p>Det är ' . $days_until_friday . ' dag(ar) kvar till nästa fredag.</p>';
            }
        }
        ?>
</body>
</html>