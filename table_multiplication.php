<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
<?php include_once "index.php" ?>
<div class="container-fluid">
   <div class="row d-flex justify-content-center">
    <h1 class="title col-12 text-center">Table de multiplication</h1>
    <form action="table_multiplication.php" method="POST" id="multiplication" class="d-block d-md-flex flex-md-row col-10 col-md-5 row">
        <label for="multiplication__Table" class="form-group col-md-6 ">Choisir une table (1 à 12) : </label>
        <input type="number" id="multiplication__Table" name="multiplication__Table"  min="0" max="12" class="form-control col-md-6 "></input>
        <label for="multiplier" class="form-group col-md-6">Choisir un multiplicateur : </label>
        <input type="number" id="multiplier" name="multiplier" min="0" max="12" class="form-control col-md-6"></input>
        <button type="submit" value="valider" class="btn btn-info col-12 ">Valider</button>
    </form>
</div>

<p id="display"></p>
<?php
$multiplicationTable=0;
$multiplierNumber=0; 
$multiplicationTable = $_POST["multiplication__Table"] ?? ""; 
$multiplierNumber = $_POST["multiplier"] ?? ""; 
?>

<div class="table-responsive row d-flex justify-content-center">
   <table class="border table-bordered table col-4 col-md-7 justify-center"> 
   <thead class="thead-light">         
        <tr>
                <th class="firstData"><?php echo " " ?></th>
                <?php
                for ($number=0; $number<=$multiplicationTable; $number++) // Boucle for thead 
                {
                ?>  
                <th class="firstLine"><?php echo $number ?></th>
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
</div>
</div>
<script src="javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>