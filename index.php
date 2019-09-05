<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method = post>
    Inventment Amount:<br>
    <input type = "text" name="Amount" /><br>
    Yearly Interest Rate:<br>
    <input type ="text" name="Rate" /><br>
    Number of Years:<br>
    <input type ="text" name="Years" />
    <input type="submit" value="Calculator" />
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $amount = $_POST["Amount"];
    $rate = $_POST["Rate"];
    $year= $_POST["Years"];
    $calculator = $amount + ($amount*$rate*0.01)*$year;
    echo $calculator;
}
?>
</body>
</html>
