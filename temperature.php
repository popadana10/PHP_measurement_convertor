<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Temperature Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main-content">
        <h1>Temperature Conversion</h1>
        <form action="" method="post">
            <label for="celsius">Enter Celsius:</label>
            <input type="text" id="celsius" name="celsius">
            <button type="submit">Convert</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $celsius = $_POST['celsius'];
            $fahrenheit = ($celsius * 9/5) + 32;
            $kelvin = $celsius + 273.15;
            echo "<h2>Results</h2>";
            echo "<p>Celsius: $celsius</p>";
            echo "<p>Fahrenheit: $fahrenheit</p>";
            echo "<p>Kelvin: $kelvin</p>";
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