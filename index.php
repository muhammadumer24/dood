
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Dood ke khrchai</title>
</head>
<body>
    <h1>Dood Calculator</h1>
        <form action="index.php" method="get">
            <label for="price">Price of 1kg of milk</label>
            <input type="number" name="price" id="price" title="Price of 1kg of milk" value="0">
            <label for="perdaymilk">Amount of milk bought per day(in kg)</label>
            <input type="number" name="perDayMilk" id="perDayMilk" title="Amount of milk bought per day" value="0">
            <label for="days">Number of days milk bought</label>
            <input type="number" name="days" id="days" title="Days bought" value="0">
            <label for="additionalMilk">Added milk bought in between(in kg)</label>
            <input type="number" name="additionalMilk" id="additionalMilk" title="Additional milk bought in between" value="0">
            <label for="fewerMilk">Fewer milk bought in between(in kg)</label>
            <input type="number" name="fewerMilk" id="fewerMilk" title="fewer milk bought in between" value="0">
            <label>Total</label>
            <div id="result" ></div>
            <button type="submit">Calculate</button>
        </form>
        <?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $price=$_GET['price'];
    $perDayMilk=$_GET['perDayMilk'];
    $days=$_GET['days'];
    $additionalMilk=$_GET['additionalMilk'];
    $fewerMilk=$_GET['fewerMilk'];

    $priceOfMonth=$price*$perDayMilk*$days;
    $additionalPrice=$price*$additionalMilk;
    $lesserPrice=$price*$fewerMilk;
    $total=$priceOfMonth+$additionalMilk-$lesserPrice;
    echo "<script>document.getElementById('result').innerHTML=".$total."</script>";
}
?>
</body>
</html>