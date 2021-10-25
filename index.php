<?php
function displayMessage($msg)
{
    echo $msg;
}
$comparaison = 0;
$memory = 0;
// Je défini un tableau
$tbl = array(9, 8, 7, 6, 5, 4, 3, 2, 1);
displayMessage('===== Tableau de base');
echo PHP_EOL;
echo implode(",", $tbl);
echo PHP_EOL;

// Je boucle sur les éléments du tableau une première fois
for ($I = count($tbl) - 2; $I >= 0; $I--) {
    // Je boucle sur les éléments du tableau une deuxième fois
    for ($J = 0; $J <= $I; $J++) {
        $dataJ = $tbl[$J];
        $tblD = $tbl[$J + 1];
        // Je réordonne le tableau
        if ($tblD < $dataJ) {
            $tbl[$J + 1] = $dataJ;
            $tbl[$J] = $tblD;
            $memory += 2;
        }
        $memory += 2;
        $comparaison++;
    }
}
displayMessage('===== Tableau de trié');
echo PHP_EOL;
// J'affiche mon tableau trier correctement
echo implode(",", $tbl);
echo PHP_EOL;
displayMessage('Nombre de comparaison : ' . $comparaison);
echo PHP_EOL;
displayMessage('Accès mémoires : ' . $memory);
echo PHP_EOL;
displayMessage('Allocations : 0');
