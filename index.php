<?php

require __DIR__.'/Character.php';
require __DIR__.'/Hunter.php';
require __DIR__.'/Warrior.php';
require __DIR__.'/Magus.php';
require __DIR__.'/Item.php';

$aragorn = new Warrior('aragorn');
$legolas = new Hunter('legolas');
$gandalf = new Magus('gandalf');

echo'<br>';
echo $legolas->rangeAttack($aragorn);
echo'<br>';
echo $aragorn->attack($legolas);
echo'<br>';
echo $aragorn->attack($legolas);
echo'<br>';
echo $gandalf->castSpell($aragorn);


?>