<?php

$usersDrink = fgets(STDIN);
    echo "99 bottle of $usersDrink";

$beerNum = 99;
do {
    usleep(2000);
    `say "$beerNum bottles of beer on the wall"`;
    echo "$beerNum bottles of beer on the wall\n";
    $beerNum--;
}while ($beerNum >0);