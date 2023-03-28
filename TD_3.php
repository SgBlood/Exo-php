<?php 
// Exercice 1

$nb = (float)readline("Entrez un nombre entre 1 et 3 : ");
while ($nb<1 or $nb>3) {
    $nb = (float)readline("Entrez un nombre entre 1 et 3 : ");
}


// Exercice 2

$nb = (float)readline("Entrez un nombre entre 10 et 20 : ");
while ($nb<10 or $nb>20) {
	if ($nb < 10)
    	$nb = (float)readline("Plus petit ! ");
    else
    	$nb = (float)readline("Plus grand ! ");
}

// Exercice 3

$nb = (int)readline("Entrez un nombre : ");
for ($i=$nb; $i<$nb+11;$i++)
	echo $i . "/n";

// Exercice 4

$nb = (int)readline("Entrez un nombre : ");
for ($i=0; $i<11;$i++)
	echo $i . " x " . $nb . " = " . $nb*$i . "\n";

// Exercice 5
$nb = (int)readline("Entrez un nombre : ");
$somme = 0;
for ($i=1; $i<=$nb;$i++) {
	$somme=$somme + $i;
}
echo $somme;

// ou alors (exo 5) :
echo ($nb*($nb+1))/2;


// Exercice 6

$nb = (int)readline("Entrez un nombre : ");
$fact = 1;
for ($i=1; $i<=$nb;$i++) {
	$fact=$fact * $i;
}
echo $fact;

// Exercice 7

$nb = (int)readline("Entrez un nombre : ");
$position = 0;
$max = $nb;
for ($i=1; $i<=20;$i++) {
	$nb = (int)readline("Entrez un nombre : ");
	if ($nb>$max) {
		$max = $nb;
		$position = $i;
	}
}
echo "Le nombre le plus grand est : " . $max . " a la position : " . $position;

// Exercice 8

$nb = (int)readline("Entrez un nombre : ");
$position = 0;
$max = $nb;
$i=1;
while ($nb!=0) {
	$i = $i + 1;
	$nb = (int)readline("Entrez un nombre : ");
	if ($nb>$max) {
		$max = $nb;
		$position = $i;
	}
}
echo "Le nombre le plus grand est : " . $max . " a la position : " . $position;

// Exercice 9

$nb = (int)readline("Entrez le prix d'un article : ");
$total = 0;
while ($nb!=0) {
	$total = $total + $nb;
	$nb = (int)readline("Entrez le prix d'un article : ");
}
echo "Vous devez payer " . $total . " euros \n";
$prix_paye = (int)readline("Le prix que vous payez : ");
$rendu = $prix_paye - $total;
while ($rendu>0) {
	if ($rendu>=10) {
		echo "10 Euros \n";
		$rendu = $rendu - 10;
	}
	elseif ($rendu>=5) {
		echo "5 Euros \n";
		$rendu = $rendu - 5;
	}
	elseif ($rendu>=1) {
		echo "1 Euro \n";
		$rendu = $rendu - 1;
	}
}

// Exercice 10

function fact($nb) {
    $fact = 1;
    for ($i=2; $i<=$nb;$i++) {
        $fact=$fact * $i;
    }
    return $fact;
}

$n = (int)readline("Entrez le nombre de chevaux partants : ");
$p = (int)readline("Entrez le nombre de chevaux joués : ");

$X= fact($n) / fact(($n-$p));
$Y = fact($n) / (fact($p)*fact(($n-$p)));

echo'Dans l’ordre : une chance sur ' . $X . ' de gagner';
echo'Dans le désordre : une chance sur ' . $Y . ' de gagner';
?>
