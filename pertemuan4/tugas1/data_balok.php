<?php
    include 'class_balok.php'; 
    $balok1 = new Balok(29, 16, 7);
    $balok2 = new Balok(12, 7, 5);
    $balok3 = new Balok(14, 7, 3);
    $balok4 = new Balok(22, 12, 8);

    echo "Balok 1:\n";
    echo "Luas: " . $balok1->getLuas() . "<br>";
    echo "Keliling: " . $balok1->getKeliling() . "<br>";
    echo "Volume: " . $balok1->getVolume() . "<br><br>";

    echo "Balok 2:\n";
    echo "Luas: " . $balok2->getLuas() . "<br>";
    echo "Keliling: " . $balok2->getKeliling() . "<br>";
    echo "Volume: " . $balok2->getVolume() . "<br><br>";

    echo "Balok 3:\n";
    echo "Luas: " . $balok3->getLuas() . "<br>";
    echo "Keliling: " . $balok3->getKeliling() . "<br>";
    echo "Volume: " . $balok3->getVolume() . "<br><br>";

    echo "Balok 4:\n";
    echo "Luas: " . $balok4->getLuas() . "<br>";
    echo "Keliling: " . $balok4->getKeliling() . "<br>";
    echo "Volume: " . $balok4->getVolume() . "<br>";
?>
