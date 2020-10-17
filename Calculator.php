<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>
    .value{
        height: 40px;
        border: 1px solid grey;
        border-radius: 3px;
        background-color:#CCD1D1;
        color:#060606;
        }
    .Opt{
        height:40px;
        border-radius: 4px;
    }
    .Submit{
        background-color: black;
        color: white;
        height: 30px;
        border-radius: 3px;
    }
    p{
        font-size: 25px;
    }

 </style>
<body>
    <form class="Calc">
        <input type="text" class="value" name="num1" placeholder="Number 1">
        <input type="text" class="value" name="num2" placeholder="Number 2">
        <select class="Opt" name="Operator">
            <option >None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
<br>
<br>
<button name="Submit" value="Submit" type="Submit" class="Submit">Calculate</button>
</form>  
<p>The answer is:</p>  
<?php
  if(isset($_GET['Submit'])){
        $result1 =$_GET['num1'];
        $result2 =$_GET['num2'];
        $Operator =$_GET['Operator'];
        switch( $Operator){
            case "None":
                echo "You need to select a method!";
            break;
            case "Add":
                echo $result1 + $result2;
            break;
            case "Subtract":
                echo $result1 - $result2;
            break;
            case "Multiply":
                echo $result1 * $result2;
            break;
            case "Divide":
                echo $result1 / $result2;
            break;
        }
    }  
?>
    
</body>
</html>