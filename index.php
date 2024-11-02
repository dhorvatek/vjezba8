<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Choose your car brand</h2>
    <form method="post">
        <?php
        
        $carBrands = array("Audi", "BMW", "Mercedes", "Volkswagen", "Toyota");

        foreach ($carBrands as $brand) {
            echo "<label>";
            echo "<input type='radio' name='selectedCar' value='$brand' required> $brand";
            echo "</label><br>";
        }
        ?>
        <br>
        <button type="submit" name="choose">Select</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selectedCar'])) {
        $selectedCar = $_POST['selectedCar'];
        echo "<h3>You have selected: $selectedCar</h3>";
    }
    ?>
</body>
</html>
