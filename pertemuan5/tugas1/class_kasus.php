<?php

class Chatime {
    protected $jenisMinuman;
    protected $rasa;
    protected $ukuran;

    public function __construct($jenisMinuman, $rasa, $ukuran) {
        $this->jenisMinuman = $jenisMinuman;
        $this->rasa = $rasa;
        $this->ukuran = $ukuran;
    }

    public function pesanMinuman() {
        echo 'Jenis Minuman: ' . $this->jenisMinuman . '<br>';
        echo 'Rasa: ' . $this->rasa . '<br>';
        echo 'Ukuran: ' . $this->ukuran . '<br>';
    }
}

class ThaiMilkTea extends Chatime {
    public function __construct($rasa, $ukuran) {
        parent::__construct('Thai Milk Tea', $rasa, $ukuran);
    }
}

class PearlMilkTea extends Chatime {
    protected $jenisPearl;

    public function __construct($rasa, $ukuran, $jenisPearl) {
        parent::__construct('Pearl Milk Tea', $rasa, $ukuran);
        $this->jenisPearl = $jenisPearl;
    }

    public function pesanMinuman() {
        parent::pesanMinuman();
        echo 'Jenis Pearl: ' . $this->jenisPearl . '<br>';
    }
}

class MatchaLatte extends Chatime {
    protected $levelMatcha;

    public function __construct($rasa, $ukuran, $levelMatcha) {
        parent::__construct('Matcha Latte', $rasa, $ukuran);
        $this->levelMatcha = $levelMatcha;
    }

    public function pesanMinuman() {
        parent::pesanMinuman();
        echo 'Level Matcha: ' . $this->levelMatcha . '<br>';
    }
}

?>
