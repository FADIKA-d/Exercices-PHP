<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <link rel="stylesheet" href="asset\css\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
<?php include_once "index.php" ?>
<form action="tableau.php" method="POST" id="table" class="row d-block">
<label for="table__Size" class="form-group col-4">Saissisez la taille du tableau</label>
<input type="number" name="table__Size" id="table__Size" class="form-control col-4"></input>
<labal for="table__Items" class="form-group col-4">Saisissez le contenu du tableau</label>
<input type="number" name="table__Items" id="table__Items" class="form-control col-4"></input>
<button type="submit" value="valider" class="form-control btn btn-info col-4">Valider</button>
</form>
<p id="displayTable"></p>
<?php
$tableSize; 
$tableItems;
if(isset($_POST['table__Size']) && isset($_POST['table__Items']) )
{
$tableSize = $_POST['table__Size'];
$tableItems = $_POST["table__Items"];
}

?>
<?php

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
            "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
            "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
);

// Exercice 1 : Quelle semaine a lieu la validation du groupe 19002 ?
$exo1 = array_search("Validation", $a["19002"]); 
if ($exo1)
{
    echo "La validation du groupe 19002 à lieu la semaine ".$exo1. ".<br>";
}
else
{
    echo "Il n'y a pas de validation pour ce groupe";
};


// Exercice 2 : Trouver la position de la dernière occurrence de Stage pour le groupe 19001.
/*
$exo2 = array_search("Stage", $a["19001"]); 
echo "La dernière occurence de Stage pour le groupe 19001 à lieu la semaine " .$exo2 .".<br>" ; 
echo end($a["19001"]) ;
$reversetable = array_reverse($a["19001"]);
echo array_search("Stage", $reversetable)."<br>";
$p = array_flip($a["19001"]); 
echo array_search("Stage", $p) ."<br>";
var_dump($p);
var_dump($a["19001"]);
echo "<br>"; 
echo key($a["19001"]);
echo key($p);
echo key($reversetable);
echo "<br>"; */
$reversetable = array_reverse($a["19001"], true);
$lo = array_search("Stage", $reversetable); 
echo $lo; 







krsort($a["19001"]); 
$lastItem = array_search("Stage",$a["19001"]);
echo "La dernière occurence de Stage pour le groupe 19001 à lieu la semaine " .$lastItem.".<br>" ; 


//Exercice 3 : Extraire, dans un nouveau tableau, les codes des groupes.

$newTable= array_keys($a);
//var_dump($c) ;
echo "Nouveau tableau avec les codes des groupes du tableau \$a : <br>"; 
print_r($newTable);
echo "<br>"; 


//Exercice 4 : Combien de semaines dure le stage du groupe 19003 ?

$g = "Stage";
$count=0;
foreach ($a["19003"] as $value)
{
if ($value == $g)
{
    $count += 1;
}
}
echo "Le stage du groupe 19003 dure ".$count." semaines."; 

?>
<script src="javascript.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>