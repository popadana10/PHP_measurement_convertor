<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Temperature Conversion</title>
    <link rel="stylesheet" href="temperature.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Temperature Conversion</h1>
        </header>
        <div id="main-content" class="convertor-container">
            <form action="" method="post">
                <label for="celsius">Enter Celsius:</label><br>
                <input type="text" id="celsius" name="celsius"><br>
                <button type="submit" class="measurement-button">Convert</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST['celsius'])) {
                    $celsius = $_POST['celsius'];
                    $fahrenheit = ($celsius * 9/5) + 32;
                    $kelvin = $celsius + 273.15;
                    echo "<h2>Results</h2>";
                    echo "<p>Celsius: $celsius</p>";
                    echo "<p>Fahrenheit: $fahrenheit</p>";
                    echo "<p>Kelvin: $kelvin</p>";
                } else {
                    echo "<p>Please enter a value for Temperature.</p>";
                }
            }
            ?>
            <form action="index.php">
                <button type="submit" class="measurement-button go-back-button">Go Back</button>
            </form>
        </div>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Dana Popa</p>
        </footer>
    </div>
</body>
</html>

</html>
