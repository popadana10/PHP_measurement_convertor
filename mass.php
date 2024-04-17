<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main-content">
        <h1>Mass Conversion</h1>
        <form method="post">
            <label for="kilograms">Enter Kilograms:</label>
            <input type="text" id="kilograms" name="kilograms">
            <button type="submit">Convert</button>
        </form>
        <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kilograms = $_POST['kilograms'];
            $grams = $kilograms * 1000;
            echo "<h2>Results</h2>";
            echo "<p>Kilograms: $kilograms </p>";
            echo "<p>Grams: $grams </p>";
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