<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
<?php include_once "index.php" ?>
<div class="container-fluid">
<div class="row d-flex justify-content-center">
    <h1 class="title col-12 text-center">Calculatrice</h1>
<form action="Calculatrice.php" method="POST" id="calculatorForm" class="d-block d-md-flex flex-md-row col-10 col-md-5 row">
<label for="calculator1" class="form-group col-md-6">Saissisez un chiffre</label>
<input type="number" name="calculator1" id="calculator1" class="form-control col-md-6"></input>
<label for="operation" class="custom-select-label col-md-6">Choisissez une opération</label>
<select name="operation" id="operation" size=4 class="custom-select col-md-6">
    <option value="addition">+</option>
    <option value="soustraction">-</option>
    <option value="multiplication">*</option>
    <option value="division">/</option>
</select>
<label for="calculator2" class="form-group col-md-6">Saissisez un chiffre</label>
<input type="number" name="calculator2" id="calculator2" class="form-control col-md-6"></input>
<button type="submit" value="valider" class="btn btn-info col-12" id="calculatorValidate">Valider</button>
</form>
</div>

<?php
$calculatorNumber1 = 0;
$calculatorNumber2 = 0 ;
$operationOption = 0;
$calculatorNumber1 = $_POST["calculator1"] ?? 0 ;
$calculatorNumber2 = $_POST["calculator2"] ?? 0 ;
$operationOption = $_POST["operation"] ?? 0 ;

function calculator($calculatorNumber1, $calculatorNumber2, $operationOption)
{
    if ($operation="addition")
    {
        $result=$calculatorNumber1+$calculatorNumber2 ;
        return $result;
    }
    else if ($operation="soustraction")
    {
        $result=$calculatorNumber1-$calculatorNumber2 ;
        return $result;
    }
    else if ($operation="multiplication")
    {
        $result=$calculatorNumber1*$calculatorNumber2 ;
        return $result;
    }
    else if ($operation="division")
    {
        $result=$calculatorNumber1/$calculatorNumber2 ;
        return $result;
    }
    else
    {
        echo "opéation impossible" ;
    }
}
$res = calculator($calculatorNumber1, $calculatorNumber2, $operationOption);

?>
<p class="text-center">
<?php 
if(isset($res))
{
    echo "Le résultat est : ".$res ;
}
?>
</p>
<!--<script src="asset\js\javascript.js"></script> !-->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<!--
$calculatorNumber1;
$calculatorNumber2;
$operationOption;

if (isset($_POST["calculator1"]) && isset($_POST["calculator2"]))
{
    $calculatorNumber1 = $_POST["calculator1"] ; 
    $calculatorNumber2 = $_POST["calculator2"] ;
};
if (isset ($_POST["operation"]))
{
    $operationOption = $_POST["operation"];
};
!-->