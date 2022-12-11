<?php 
    $number1=$_POST['num1'];
    $number2=$_POST['num2'];
    $op=$_POST['operation'] ;
    $result='';

    if ($op == '+' ){
        $result = $number1 + $number2;
    }

    else if ($op == '-'){
        $result = $number1 - $number2;
    }

    else if ($op == '*'){
        $result = $number1 * $number2;
    }

    else if ($op == '/'){
        $result = $number1 / $number2;
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simple_hw_cal.php" method="POST">

    <h1>PHP Simple Calculator</h1>
    <div>
        <label for="num1">Number1</label>
        <input type="number" name="num1" id="num1">
    </div>

    <div>
        <label for="num2">Number2</label>
        <input type="number" name="num2" id="num2">
    </div>

    <div>
        <label for="result">Result</label>
        <input type="text" value =" <?php echo $result;?>">
    </div>

    <div>
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
        <input type="submit" name="operation" value="C">

    </div>

  


</body>
</html>