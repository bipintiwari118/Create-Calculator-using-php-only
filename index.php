<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Calculator PHP</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="index.php"> -->
</head>
<body>
    
    <form action="index.php" method="post">
        <br><br>
     Number1:   <input type="number" name="num1"><br><br>
     Operator:  <input type="textbox" name="op"><br><br>
     Number2:  <input type="number" name="num2"><br><br>
        <input type="submit"><br><br><br>
        
    <?php
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $op=$_POST['op'];
        // $m="invalid operator";

        if($op=="+"){
            echo "The answer is ". ($num1 + $num2);
        }elseif($op=="-"){
            echo "The answer is " . ($num1-$num2);
        }elseif($op=="*"){
            echo "The answer is ". ($num1*$num2);
        }elseif($op=="/"){
            echo "The answer is " . ($num1/$num2);
        }else{  
            echo "<script>alert(\"invalid operator\") </script>";
        }
    ?>
    </form>


    
</body>
</html>