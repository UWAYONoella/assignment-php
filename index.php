<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment No1</title>
</head>
<body>
    <?php
    #question 1:
    function sum(int $a,int $b,int $c,int $d){
        echo $a+$b+$c+$d;
    }
    sum(3,4,1,2);
    #question 2:

    echo"<br>/*****************************/<br><br>*Names: UWAYO Noella<br>
    <br>*Student ID: 22/16752<br><br>*INES_RUHENGERI<br><br><br>*Faculty of Applied Fundamental <br><br>*Department:CS
<br><br>*Class: Level II<br><br>*Course: Advanced Web design and Delopment<br><br>/***************************************************/<br><br>"
    ;
    #question 3:
    function thanks($name,$present,$age,$city,$myNam){
        echo"Dear sir:$name,<br>Thank you for the $present. I really like it.<br>
        I can't believe I'm aleady $age years old, but it doesn't fell that much different than being<br> 
        $age-1.<br>
        I hope that some time in the next year we can come visit you in $city.<br>
        Thank you once again for the $present.<br>
        Sincerely,<br>
        $myNam<br><br>";
    }
    thanks("MANZI","Gift",30,"KIGALI","UWAYO Noella");

    #Question4
$radius=6;
$P=2*pi()*$radius;
$A=pi()*($radius*$radius);
$V=(4/3)*pi()*($radius*$radius*$radius);
Echo "The circumference of circle is equal to $P <br>The Area of circle is equal to $A<br>The Volume of circle is equal to $V";
   ?>
</body>
</html>