<?php

require_once 'class_kasus.php';

$thaiMilkTea = new ThaiMilkTea('Original', 'Large');
$pearlMilkTea = new PearlMilkTea('Chocolate', 'Medium', 'Tapioca Pearl');
$matchaLatte = new MatchaLatte('Premium', 'Regular', 'High');

echo "Info Thai Milk Tea:<br>";
$thaiMilkTea->pesanMinuman();
echo "<br>";

echo "Info Pearl Milk Tea:<br>";
$pearlMilkTea->pesanMinuman();
echo "<br>";

echo "Info Matcha Latte:<br>";
$matchaLatte->pesanMinuman();

?>
