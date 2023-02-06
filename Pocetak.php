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
        echo '               ' . PHP_EOL;
        echo 'GLAVNI IZBORNIK' . PHP_EOL;
        echo '===============' . PHP_EOL;
        echo '1. Radnici' . PHP_EOL;
        echo '2. Smjene' . PHP_EOL;
        echo '3. Proizvodi' . PHP_EOL;
        echo '4. Izlaz iz programa - EXIT' . PHP_EOL;
        echo '               ' . PHP_EOL;
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
                ECHO '===========' . PHP_EOL;
                echo 'DOVIDJENJA!' . PHP_EOL;
                ECHO '===========' . PHP_EOL;
                break;
            default:
                $this->glavniIzbornik();
        }
    }

    //==================//
    //  RADNIK IZBORNIK //
    //==================//

    private function radnikIzbornik(){
        echo '               ' . PHP_EOL;
        echo 'RADNIK IZBORNIK' . PHP_EOL;
        echo '===============' . PHP_EOL;
        echo '1. Pregled radnika' . PHP_EOL;
        echo '2. Unos radnika' . PHP_EOL;
        echo '3. Izmjena radnika' . PHP_EOL;
        echo '4. Brisanje radnika' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        echo '               ' . PHP_EOL;
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
        echo '               ' . PHP_EOL;
        echo 'SMJENA IZBORNIK' . PHP_EOL;
        echo '===============' . PHP_EOL;
        echo '1. Pregled smjene' . PHP_EOL;
        echo '2. Unos smjene' . PHP_EOL;
        echo '3. Izmjena smjene' . PHP_EOL;
        echo '4. Brisanje smjene' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        echo '               ' . PHP_EOL;
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
        echo '               ' . PHP_EOL;
        echo 'PROIZVOD IZBORNIK' . PHP_EOL;
        echo '=================' . PHP_EOL;        
        echo '1. Pregled proizvoda' . PHP_EOL;
        echo '2. Unos proizvoda' . PHP_EOL;
        echo '3. Izmjena proizvoda' . PHP_EOL;
        echo '4. Brisanje proizvoda' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        echo '               ' . PHP_EOL;

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


    //==========================================//
    //  RADNICI - PREGLED/UNOS/IZMJENA/BRISANJE //
    //==========================================//

    //  PREGLED

    private function pregledRadnika($prikaziradnike = true){
        echo '============================' . PHP_EOL;
        echo 'Svi radnici:' . PHP_EOL;
        echo '============================' . PHP_EOL;
        $rb=1;
        foreach ($this->radnici as $radnik){
            echo $rb++ . '. ' . $radnik->ime . ' ' . $radnik->prezime . PHP_EOL;
        }
        echo '============================' . PHP_EOL;
        if($prikaziradnike){
            $this->radnikIzbornik();
        }
    }

    //  UNOS

    private function unosdRadnika(){
        $r=new stdClass();
        $r->ime = Pomocno::unosTeksta('Unesite ime radnika:');
        $r->prezime = Pomocno::unosTeksta('Unesite prezime radnika:');
        $r->id = Pomocno::unosBroja('Unesite ID radnika:');
        $r->placa = Pomocno::unosDecimalnogBroja('Unesite preporucenu placu radnika (EUR):');
        $this->radnici[]=$r;
        echo '=============' . PHP_EOL;
        echo 'RADNIK DODAN!' . PHP_EOL;
        echo '=============' . PHP_EOL;
        $this->radnikIzbornik();
    }

    //  IZMJENA

    private function izmjenaRadnika(){
        $this->pregledRadnika(false);
        $rb=Pomocno::brojRaspon('Odaberite radnika: ',1,count($this->radnici));
        $rb--;
        $this->radnici[$rb]->ime = Pomocno::unosTeksta('Unesite ispravak imena (' . 
        $this->radnici[$rb]->ime 
        .'): ', $this->radnici[$rb]->ime);
        $this->radnici[$rb]->prezime = Pomocno::unosTeksta('Unesite ispravak prezimena (' . 
        $this->radnici[$rb]->prezime 
        .'): ', $this->radnici[$rb]->prezime);
        $this->radnici[$rb]->id = Pomocno::unosBroja('Unesite ispravak ID (' . 
        $this->radnici[$rb]->id 
        .'): ', $this->radnici[$rb]->id);
        $this->radnici[$rb]->placa = Pomocno::unosDecimalnogBroja('Unesite ispravak preporucene place (' . 
        $this->radnici[$rb]->placa 
        .'): ', $this->radnici[$rb]->placa);

        echo '=================' . PHP_EOL;
        echo 'RADNIK IZMJENJEN!' . PHP_EOL;
        echo '=================' . PHP_EOL;

        $this->radnikIzbornik();
    }

    //  BRISANJE

    private function brisanjeRadnika(){
        $this->pregledRadnika(false);
        $rb = Pomocno::brojRaspon('Odaberite radnika: ',1,count($this->radnici));
        $rb--;
        array_splice($this->radnici,$rb,1);
        echo '===============' . PHP_EOL;
        echo 'RADNIK OBRISAN!' . PHP_EOL;
        echo '===============' . PHP_EOL;
        $this->radnikIzbornik();
    }



    //=========================================//
    //  SMJENE - PREGLED/UNOS/IZMJENA/BRISANJE //
    //=========================================//

    //  PREGLED

    private function pregledSmjene($prikazismjene = true){
        echo '============================' . PHP_EOL;
        echo 'Sve smjene:' . PHP_EOL;
        echo '============================' . PHP_EOL;
        $rb=1;
        foreach($this->smjene as $smjena){
            echo $rb++ . '. ' . $smjena->naziv . PHP_EOL;
        }
        echo '============================' . PHP_EOL;
        if($prikazismjene){
            $this->smjenaIzbornik();
        }
    }

    //  UNOS

    private function unosSmjene(){
        $s=new stdClass();
        $s->naziv = Pomocno::unosTeksta('Unesite naziv smjene: ');
        $s->trajanje = Pomocno::unosDecimalnogBroja('Unesite broj radnih sati u tjednu:');
        $this->smjene[]=$s;
        echo '==============' . PHP_EOL;
        echo 'SMJENA DODANA!' . PHP_EOL;
        echo '==============' . PHP_EOL;
        $this->smjenaIzbornik();
    }

    //  IZMJENA

    private function izmjenaSmjene(){
        $this->pregledSmjene(false);
        $rb=Pomocno::brojRaspon('Odaberite smjenu: ',1,count($this->smjene));
        $rb--;
        $this->smjene[$rb]->naziv = Pomocno::unosTeksta('Unesite ispravak naziva smjene (' .
        $this->smjene[$rb]->naziv
        .'): ', $this->smjene[$rb]->naziv);
        $this->smjene[$rb]->trajanje = Pomocno::unosDecimalnogBroja('Unesite ispravak broja sati u tjednu (' .
        $this->smjene[$rb]->trajanje
        .'): ', $this->smjene[$rb]->trajanje);
        
        echo '==================' . PHP_EOL;
        echo 'SMJENA IZMJENJENA!' . PHP_EOL;
        echo '==================' . PHP_EOL;

        $this->smjenaIzbornik();

    }

    //  BRISANJE

    private function brisanjeSmjene(){
        $this->pregledSmjene(false);
        $rb= Pomocno::brojRaspon('Odaberite smjenu: ',1,count($this->smjene));
        $rb--;
        array_splice($this->smjene,$rb,1);
        echo '================' . PHP_EOL;
        echo 'SMJENA OBRISANA!' . PHP_EOL;
        echo '================' . PHP_EOL;
        $this->smjenaIzbornik();
    }

    //============================================//
    //  PROIZVODI - PREGLED/UNOS/IZMJENA/BRISANJE //
    //============================================//

    //PREGLED

    private function pregledProizvoda($prikaziProizvode = true){
        echo '============================' . PHP_EOL;
        echo 'Proizvodi:' . PHP_EOL;
        echo '============================' . PHP_EOL;
        $rb=1;
        foreach($this->proizvodi as $proizvod){
            echo $rb++ . '. ' . $proizvod->naziv . PHP_EOL;
        }
        echo '============================' . PHP_EOL;
        if($prikaziProizvode){
            $this->proizvodIzbornik();
        }
    }

    //  UNOS

    private function unosProizvoda(){
        $p=new stdClass();
        $p->naziv = Pomocno::unosTeksta('Unesite naziv proizvoda: ');
        $p->narucitelj = Pomocno::unosTeksta('Unesite naziv narucitelja:');
        $this->proizvodi[]=$p;
        ECHO '===============' . PHP_EOL;
        echo 'PROIZVOD DODAN!' . PHP_EOL;
        ECHO '===============' . PHP_EOL;
        $this->proizvodIzbornik();
    }

    //  IZMJENA

    private function izmjenaProizvoda(){
        $this->pregledProizvoda(false);
        $rb=Pomocno::brojRaspon('Odaberite Proizvod: ',1,count($this->proizvodi));
        $rb--;
        $this->proizvodi[$rb]->naziv = Pomocno::unosTeksta('Unesite ispravak naziva proizvoda (' .
        $this->proizvodi[$rb]->naziv
        .'): ', $this->proizvodi[$rb]->naziv);
        $this->proizvodi[$rb]->narucitelj = Pomocno::unosTeksta('Unesite ispravak narucitelja proizvoda (' .
        $this->proizvodi[$rb]->narucitelj
        .'): ', $this->proizvodi[$rb]->narucitelj);

        echo '===================' . PHP_EOL;
        echo 'PROIZVOD IZMJENJEN!' . PHP_EOL;
        echo '===================' . PHP_EOL;

        $this->proizvodIzbornik();
    }

    //  BRISANJE

    private function brisanjeProizvoda(){
        $this->pregledProizvoda(false);
        $rb = Pomocno::brojRaspon('Odaberite proizvod: ',1,count($this->proizvodi));
        $rb--;
        array_splice($this->proizvodi,$rb,1);
        echo '=================' . PHP_EOL;
        echo 'PROIZVOD OBRISAN!' . PHP_EOL;
        echo '=================' . PHP_EOL;
        $this->proizvodIzbornik();
    }

}

new Start($argc,$argv);