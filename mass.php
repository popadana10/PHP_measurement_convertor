<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Conversion</title>
    <link rel="stylesheet" href="mass.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Mass Conversion</h1>
        </header>
        <div id="main-content" class="convertor-container">
            <form method="post">
                <label for="kilograms">Enter Kilograms:</label><br>
                <input type="text" id="kilograms" name="kilograms"><br>
                <button type="submit" class="measurement-button convertor-button">Convert</button>
            </form>
            <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['kilograms'])) {
                    $kilograms = $_POST['kilograms'];
                    $grams = $kilograms * 1000;
                    echo "<h2>Results</h2>";
                    echo "<p>Kilograms: $kilograms</p>";
                    echo "<p>Grams: $grams</p>";
                } elseif (isset($_POST['kilograms'])) {
                    echo "<p>Please enter a value for Kilograms.</p>";
                }
            }
            ?>
            <form action="index.php">
                <button type="submit">Go Back</button>
            </form>
        </div>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Dana Popa</p>
        </footer>
    </div>
</body>
</html>
