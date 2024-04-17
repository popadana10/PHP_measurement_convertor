<?php
$metersPerSecond = $knots = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['kmToMs'])) {
        $kmToMs = $_POST['kmToMs'];
        $metersPerSecond = $kmToMs * 1000 / 3600; 
    }

    if (isset($_POST['kmToKnots'])) {
        $kmToKnots = $_POST['kmToKnots'];
        $knots = $kmToKnots * 0.539957; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main-content">
        <h1>Speed Conversion</h1>
        <form method="post">
            <label for="kmToMs">Km/hr to Meters/sec:</label>
            <input type="text" id="kmToMs" name="kmToMs" placeholder="Enter Km/hr">
            <button type="submit">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kmToMs'])) {
            echo "<h2>Results</h2>";
            echo "<p>Km/hr to Meters/sec: $metersPerSecond m/s</p>";
        }
        ?>

        <form method="post">
            <label for="kmToKnots">Km/hr to Knots:</label>
            <input type="text" id="kmToKnots" name="kmToKnots" placeholder="Enter Km/hr">
            <button type="submit">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kmToKnots'])) {
            echo "<h2>Results</h2>";
            echo "<p>Km/hr to Knots: $knots knots</p>";
        }
        ?>

        <form action="index.php">
            <button type="submit">Go Back</button>
        </form>
    </div>
<div id="footer">
  <p>&copy; <?php echo date("Y"); ?> Dana Popa</p>
</div>
</body>
</html>
