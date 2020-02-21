<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table_multiplication2</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="javascript.js"></script>
</head>
<body>
<?php
$multiplicationTable = $_POST["multiplication__Table"]; 
$multiplierNumber = $_POST["multiplier"]; 
?>
<!--First method!-->
<table class="border table"> 
   <thead>         
        <tr>
                <th class="border"><?php echo " " ?></th>
                <?php
                for ($number=0; $number<=$multiplicationTable; $number++) // Boucle for thead 
                {
                ?>  
                <th class="border"><?php echo $number ?></th>
                <?php
                }
                ?>
        </tr>
    <thead> 

    <tbody>
        
            <?php   
                for ($number=0; $number<=$multiplierNumber; $number++) 
                {  
            ?>        
            <tr>
            <td class="firstColumn"><?php echo $number ?></td>
            <?php 
                
                for ($multipliant=0; $multipliant<=$multiplicationTable; $multipliant++) // Boucle for tbody
            {
                $result=$number*$multipliant;
            ?> 
                
                <td class="border"><?php echo ($result) ?></td>
            <?php
            }
            }
            ?>
            </tr>
    </tbody>

    </table>

<!--Second method!-->
<!--<table class=border>
<?php

 function resulta2()
 {
    echo "<thead>" ;  // head start
    echo "<tr>"; // first line start
    echo "<td class=border></td>"; 
        for ($number2=0; $number2<=12; $number2++)
        {
    echo "<td class=car>$number2</td>";
    echo "</tr>" ; // first line end
    echo "</thead>"; // head end
        }  ;
        for ($number2=0; $number2<=12; $number2++)
            {
    echo "<tbody>"; // body start
                echo "<tr>"; // others lines start
    echo "<td class=border>$number2</td>"; // first column
                for ($multipliant2=0; $multipliant2<=12; $multipliant2++)
                {
                $result2 =$number2*$multipliant2 ;
    echo "<td class=border>$result2</td>" ; // others columns
    echo "</tr>"; // other lines end
    echo "</tbody>" ; // body end
                } ;
            };
        
} ; 
resulta2() ; 
?>
</table>
!-->

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

</body>
</html>

