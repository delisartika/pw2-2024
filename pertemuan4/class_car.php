<?php

    class Car {
        // hak akses: public, private, protected
        // property
        public $brand;
        public $color;

        // method
        function getBrand() {
            return $this->brand;
        }
    }

    // object
    $tesla = new Car();
    $supra = new Car();

    // set value / setter
    $tesla->brand = 'Tesla';
    $supra->brand = 'Supra';

    // echo
    echo $tesla->getBrand();
    echo '<br>';
    echo $supra->getBrand();

?>