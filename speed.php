<?php
$metersPerSecond = $knots = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['kmToMs'])) {
        $kmToMs = $_POST['kmToMs'];
        if (!empty($kmToMs)) {
            $metersPerSecond = $kmToMs * 1000 / 3600; 
        } else {
            $error_message = "Please enter a value for Km/hr to Meters/sec.";
        }
    }

    if (isset($_POST['kmToKnots'])) {
        $kmToKnots = $_POST['kmToKnots'];
        if (!empty($kmToKnots)) {
            $knots = $kmToKnots * 0.539957; 
        } else {
            $error_message = "Please enter a value for Km/hr to Knots.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Conversion</title>
    <link rel="stylesheet" href="speed.css"> <!-- Link to your separate CSS file -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Speed Conversion</h1>
        </header>
        <div id="main-content" class="convertor-container">
            <form method="post">
                <label for="kmToMs">Km/hr to Meters/sec:</label><br>
                <input type="text" id="kmToMs" name="kmToMs" placeholder="Enter Km/hr"><br>
                <button type="submit" class="convert-button">Convert</button>
                <?php if ($error_message && isset($_POST['kmToMs'])): ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kmToMs']) && empty($error_message)) {
                echo "<h2>Results</h2>";
                echo "<p class='result'>Km/hr to Meters/sec: $metersPerSecond m/s</p>";
            }
            ?>

            <form method="post">
                <label for="kmToKnots">Km/hr to Knots:</label><br>
                <input type="text" id="kmToKnots" name="kmToKnots" placeholder="Enter Km/hr"><br>
                <button type="submit" class="convert-button">Convert</button>
                <?php if ($error_message && isset($_POST['kmToKnots'])): ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kmToKnots']) && empty($error_message)) {
                echo "<h2>Results</h2>";
                echo "<p class='result'>Km/hr to Knots: $knots knots</p>";
            }
            ?>

            <form action="index.php">
                <button type="submit" class="go-back-button">Go Back</button>
            </form>
        </div>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Dana Popa</p>
        </footer>
    </div>
</body>
</html>
