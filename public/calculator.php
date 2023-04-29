<?php
require_once 'app/core/Calchandler.php';
require_once 'app/core/App.php';


if (isset($_POST['add'])) {
    $handler = new CalcHandler;

    $calculator = new App;
    $result     = $calculator->add();
}
if (isset($_POST['sub'])) {
    $handler = new CalcHandler;

    $calculator = new App;
    $result     = $calculator->sub();
}
if (isset($_POST['multiply'])) {
    $handler = new CalcHandler;

    $calculator = new App;
    $result     = $calculator->multiply();
}
if (isset($_POST['divide'])) {
    $handler = new CalcHandler;

    $calculator = new App;
    $result     = $calculator->divide();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP calculator</title>
</head>

<body>

    <form action="" method="post">
        num1
        <input type="text" name="num1" id="" required>
        num2
        <input type="text" name="num2" id="" required>

        <input type="submit" name="add" value="add">
        <input type="submit" name="sub" value="sub">
        <input type="submit" name="multiply" value="multiply">
        <input type="submit" name="divide" value="divide">

    </form>
    <p>result:
        <?php if (isset($result)) {
            echo $result;
        } ?>
    </p>
</body>

</html>