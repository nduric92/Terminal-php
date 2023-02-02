<?php

include_once 'Pomocno.php';

class Start{

    private $radnici;
    private $smjene;
    private $proizvodi;
    private $dev;

    public function __construct($argc, $argv){
        $this -> radnici=[];
        $this -> smjene=[];
        $this -> proizvodi=[];
        if($argc>1 && $argv[1]=='dev'){
            $this -> testPodaci();
            $this -> dev=true;
        }else{
            $this->dev=false;
        }
        $this->pozdravnaPoruka();
        $this->glavniIzbornik();
    }

    //===================//
    //  POZDRAVNA PORUKA //
    //===================//

    private function pozdravnaPoruka(){
        echo 'Dobrodosli u Product Plast terminal APP' . PHP_EOL;
    }

    //==================//
    //  GLAVNI IZBORNIK //
    //==================//

    private function glavniIzbornik(){
        echo 'Glavni izbornik' . PHP_EOL;
        echo '1. Radnici' . PHP_EOL;
        echo '2. Smjene' . PHP_EOL;
        echo '3. Proizvodi' . PHP_EOL;
        echo '4. Izlaz iz programa - EXIT' . PHP_EOL;
        $this->opcijaGlavniIzbornik();
    }

    private function opcijaGlavniIzbornik(){
        switch(Pomocno::brojRaspon('Odaberi opciju: ',1,4)){
            case 1:
                $this->radnikIzbornik();
                break;
            case 2:
                $this->smjenaIzbornik();
                break;
            case 3:
                $this->proizvodIzbornik();
                break;
            case 4:
                echo 'Dovidjena!!!' . PHP_EOL;
                break;
            default:
                $this->glavniIzbornik();
        }
    }

    //==================//
    //  RADNIK IZBORNIK //
    //==================//

    private function radnikIzbornik(){
        echo 'Radnik izbornik' . PHP_EOL;
        echo '1. Pregled radnika' . PHP_EOL;
        echo '2. Unos radnika' . PHP_EOL;
        echo '3. Izmjena radnika' . PHP_EOL;
        echo '4. Brisanje radnika' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        $this->opcijaRadnikIzbornik();
    }

    private function opcijaRadnikIzbornik(){
        switch(Pomocno::brojRaspon('Odaberi opciju: ',1,5)){
            case 1:
                $this->pregledRadnika();
                break;
            case 2:
                $this->unosdRadnika();
                break;
            case 3:
                $this->izmjenaRadnika();
                break;
            case 4:
                $this->brisanjeRadnika();
                break;
            case 5:
                $this->glavniIzbornik();
                break;
            default:
            $this->radnikIzbornik();
        }
    }

    //==================//
    //  SMJENA IZBORNIK //
    //==================//

    private function smjenaIzbornik(){
        echo 'Smjena izbornik' . PHP_EOL;
        echo '1. Pregled smjene' . PHP_EOL;
        echo '2. Unos smjene' . PHP_EOL;
        echo '3. Izmjena smjene' . PHP_EOL;
        echo '4. Brisanje smjene' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        $this->opcijaSmjenaIzbornik();
    }

    private function opcijaSmjenaIzbornik(){
        switch(Pomocno::brojRaspon('Odaberi opciju: ',1,5)){
            case 1:
                $this->pregledSmjene();
                break;
            case 2:
                $this->unosSmjene();
                break;
            case 3:
                $this->izmjenaSmjene();
                break;
            case 4:
                $this->brisanjeSmjene();
                break;
            case 5:
                $this->glavniIzbornik();
                break;
            default:
            $this -> smjenaIzbornik();
        }
    }

    //====================//
    //  PROIZVOD IZBORNIK //
    //====================//

    private function proizvodIzbornik(){
        echo 'Proizvod izbornik' . PHP_EOL;
        echo '1. Pregled proizvoda' . PHP_EOL;
        echo '2. Unos proizvoda' . PHP_EOL;
        echo '3. Izmjena proizvoda' . PHP_EOL;
        echo '4. Brisanje proizvoda' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        $this->opcijaProizvodIzbornik();
    }

    private function opcijaProizvodIzbornik(){
        switch(Pomocno::brojRaspon('Odaberi opciju: ',1,5)){
            case 1:
                $this->pregledProizvoda();
                break;
            case 2:
                $this->unosProizvoda();
                break;
            case 3:
                $this->izmjenaProizvoda();
                break;
            case 4:
                $this->brisanjeProizvoda();
                break;
            case 5:
                $this->glavniIzbornik();
                break;
            default:
            $this -> proizvodIzbornik();
        }
    }



}

new Start($argc,$argv);