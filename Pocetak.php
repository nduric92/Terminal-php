<?php

include_once 'Pomocno.php';

class Start{

    private $radnici;
    private $smjena;
    private $proizvodi;
    private $dev;

    public function __construct($argc, $argv){
        $this -> radnici=[];
        $this -> smjena=[];
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
        echo '                                       ' . PHP_EOL;
        echo '=======================================' . PHP_EOL;
        echo 'Dobrodosli u Product Plast terminal APP' . PHP_EOL;
        echo '=======================================' . PHP_EOL;
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
                if(count($this->radnici)===0){
                    echo '===================================' . PHP_EOL;
                    echo 'Nema unesenih radnika u aplikaciji!' . PHP_EOL;
                    echo '===================================' . PHP_EOL;
                    $this->radnikIzbornik();
                }else{
                    $this->pregledRadnika();
                }                
                break;
            case 2:
                $this->unosdRadnika();
                break;
            case 3:
                if(count($this->radnici)===0){
                    echo '===================================' . PHP_EOL;
                    echo 'Nema unesenih radnika u aplikaciji!' . PHP_EOL;
                    echo '===================================' . PHP_EOL;
                    $this->radnikIzbornik();
                }else{
                    $this->izmjenaRadnika();
                }
                break;
            case 4:
                if(count($this->radnici)===0){
                    echo '===================================' . PHP_EOL;
                    echo 'Nema unesenih radnika u aplikaciji!' . PHP_EOL;
                    echo '===================================' . PHP_EOL;
                    $this->radnikIzbornik();
                }else{
                    $this->brisanjeRadnika();
                }                
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
                if(count($this->smjena)===0){
                    echo '==================================' . PHP_EOL;
                    echo 'Nema unesenih smjena u aplikaciji!' . PHP_EOL;
                    echo '==================================' . PHP_EOL;
                    $this->smjenaIzbornik();
                }else{
                    $this->pregledSmjene();
                }                
                break;
            case 2:
                $this->unosSmjene();
                break;
            case 3:
                if(count($this->smjena)===0){
                    echo '==================================' . PHP_EOL;
                    echo 'Nema unesenih smjena u aplikaciji!' . PHP_EOL;
                    echo '==================================' . PHP_EOL;
                    $this->smjenaIzbornik();
                }else{
                    $this->izmjenaSmjene();
                }                
                break;
            case 4:
                if(count($this->smjena)===0){
                    echo '==================================' . PHP_EOL;
                    echo 'Nema unesenih smjena u aplikaciji!' . PHP_EOL;
                    echo '==================================' . PHP_EOL;
                    $this->smjenaIzbornik();
                }else{
                    $this->brisanjeSmjene();
                }               
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
                if(count($this->proizvodi)===0){
                    echo '=====================================' . PHP_EOL;
                    echo 'Nema unesenih proizvoda u aplikaciji!' . PHP_EOL;
                    echo '=====================================' . PHP_EOL;
                    $this->proizvodIzbornik();
                }else{
                    $this->pregledProizvoda();
                }                
                break;
            case 2:
                $this->unosProizvoda();
                break;
            case 3:
                if(count($this->proizvodi)===0){
                    echo '=====================================' . PHP_EOL;
                    echo 'Nema unesenih proizvoda u aplikaciji!' . PHP_EOL;
                    echo '=====================================' . PHP_EOL;
                    $this->proizvodIzbornik();
                }else{
                    $this->izmjenaProizvoda();
                }
                break;
            case 4:
                if(count($this->proizvodi)===0){
                    echo '=====================================' . PHP_EOL;
                    echo 'Nema unesenih proizvoda u aplikaciji!' . PHP_EOL;
                    echo '=====================================' . PHP_EOL;
                    $this->proizvodIzbornik();
                }else{
                    $this->brisanjeProizvoda();
                }                
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
        echo '============' . PHP_EOL;
        echo 'Svi radnici:' . PHP_EOL;
        echo '============' . PHP_EOL;
        $rb=1;
        foreach ($this->radnici as $radnik){
            echo $rb++ . '. ' . $radnik->ime . ' ' . $radnik->prezime . PHP_EOL;
        }
        echo '============' . PHP_EOL;
        if($prikaziradnike){
        $this->radnikIzbornik();
        }
    }

    private function odabirRadnika($prikaziradnike = true){
        echo '============' . PHP_EOL;
        echo 'Svi radnici:' . PHP_EOL;
        echo '============' . PHP_EOL;
        $rb=1;
        foreach ($this->radnici as $radnik){
            echo $rb++ . '. ' . $radnik->ime . ' ' . $radnik->prezime . PHP_EOL;
        }
        echo '============' . PHP_EOL;
        if($prikaziradnike){
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
        echo '===========' . PHP_EOL;
        echo 'Sve smjene:' . PHP_EOL;
        echo '===========' . PHP_EOL;
        $rb=1;
        foreach($this->smjena as $s){
            echo $rb++ . '. ' . $s->naziv . PHP_EOL;            
        }

        echo '===========' . PHP_EOL;
        if($prikazismjene){
            $this->smjenaIzbornik();
        }
    }

    //  UNOS

    private function unosSmjene(){
        $s=new stdClass();
        $s->naziv = Pomocno::unosTeksta('Unesite naziv smjene: ');
        $s->trajanje = Pomocno::unosDecimalnogBroja('Unesite broj radnih sati u tjednu:');
        
        $s->radnici=[];
        echo '                      ' . PHP_EOL;
        echo 'Unesi radnike smjene: ' . PHP_EOL;
        while(true){
            $this->odabirRadnika();
            $rb = Pomocno::brojRaspon('Odaberi radnika: ',1,count($this->radnici));
            $rb--;
            if(!in_array($this->radnici[$rb],$s->radnici)){
                $s->radnici[] = $this->radnici[$rb];
            }else{
                echo 'Odabrani radnik postoji u smjeni!' . PHP_EOL;
            }
            if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                break;
            }
        }
        
        $this->smjena[]=$s;
        echo '==============' . PHP_EOL;
        echo 'SMJENA DODANA!' . PHP_EOL;
        echo '==============' . PHP_EOL;
        $this->smjenaIzbornik();
    }

    //  IZMJENA

    private function izmjenaSmjene(){
        $this->pregledSmjene(false);
        $rb=Pomocno::brojRaspon('Odaberite smjenu: ',1,count($this->smjena));
        $rb--;
        $this->smjena[$rb]->naziv = Pomocno::unosTeksta('Unesite ispravak naziva smjene (' .
        $this->smjena[$rb]->naziv
        .'): ', $this->smjena[$rb]->naziv);
        $this->smjena[$rb]->trajanje = Pomocno::unosDecimalnogBroja('Unesite ispravak broja sati u tjednu (' .
        $this->smjena[$rb]->trajanje
        .'): ', $this->smjena[$rb]->trajanje);

        while(true){
            echo '                              ' . PHP_EOL;
            echo 'Dodavanje radnika na smjenu:  ' . PHP_EOL;
            echo '                              ' . PHP_EOL;
            $this->odabirRadnika();
            $rbr = Pomocno::brojRaspon('Odaberi radnika: ',1,count($this->radnici));
            $rbr--;
            if(!in_array($this->radnici[$rbr],$this->smjena[$rb]->radnici)){
                $this->smjena[$rb]->radnici[]=$this->radnici[$rbr];
            }else{
                echo 'Odabrani radnik postoji u smjeni!' . PHP_EOL;
            }
            if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                break;
            }
        }

        echo '                         ' . PHP_EOL;
        echo '=========================' . PHP_EOL;
        echo 'Brisanje radnika u smjeni' . PHP_EOL;
        echo '=========================' . PHP_EOL;
        
        if(Pomocno::brojRaspon('1 - Brisanje,  0 - prekid: ',0,1)===1){
            while(true){
                echo '                         ' . PHP_EOL;
                echo 'Brisanje radnika smjene: ' . PHP_EOL;
                echo '                         ' . PHP_EOL;
                $this->odabirRadnika($this->smjena[$rb]->radnici);
                $rbr = Pomocno::brojRaspon('Odaberi radnika: ',1,count($this->smjena[$rb]->radnici));
                $rbr--;
                array_splice($this->smjena[$rb]->radnici,$rbr,1);
        
                if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                    break;
                }
            }
        }
        
          
         
        echo '==================' . PHP_EOL;
        echo 'SMJENA IZMJENJENA!' . PHP_EOL;
        echo '==================' . PHP_EOL;

        $this->smjenaIzbornik();

    }

    //  BRISANJE

    private function brisanjeSmjene(){
        $this->pregledSmjene(false);
        $rb= Pomocno::brojRaspon('Odaberite smjenu: ',1,count($this->smjena));
        $rb--;
        array_splice($this->smjena,$rb,1);
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
        echo '==========' . PHP_EOL;
        echo 'Proizvodi:' . PHP_EOL;
        echo '==========' . PHP_EOL;
        $rb=1;
        foreach($this->proizvodi as $proizvod){
            echo $rb++ . '. ' . $proizvod->naziv . PHP_EOL;
        }
        echo '==========' . PHP_EOL;
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

    private function testPodaci(){
        $this->radnici[]=$this->kreirajRadnika('Nemanja','Djuric',12345,600.49);
        $this->radnici[]=$this->kreirajRadnika('Danijela','Nikic',13245,600.49);
        $this->radnici[]=$this->kreirajRadnika('Jelena','Sljokic',54321,600.49);
        $this->radnici[]=$this->kreirajRadnika('Miroslav','Mirosavljevic',13542,600.49);
    
        $this->smjena[]=$this->kreirajSmjenu("Igor's",37.5);
        $this->smjena[]=$this->kreirajSmjenu("Tobias's",37.5);
        $this->smjena[]=$this->kreirajSmjenu("Adrian's",37.5);
    
        $this->proizvodi[]=$this->kreirajProizvod('VME 242','Volvo');
        $this->proizvodi[]=$this->kreirajProizvod('VME 389','Volvo');
        $this->proizvodi[]=$this->kreirajProizvod('VME 186','Volvo');
        $this->proizvodi[]=$this->kreirajProizvod('VME 132','Volvo');
        $this->proizvodi[]=$this->kreirajProizvod('VME 415','Volvo');
        $this->proizvodi[]=$this->kreirajProizvod('VME 228','Volvo');
    }
    
    private function kreirajRadnika($ime, $prezime, $id, $placa){
        $r = new stdClass();
        $r->ime=$ime;
        $r->prezime=$prezime;
        $r->id=$id;
        $r->placa=$placa;
        return $r;
    }
    
    private function kreirajSmjenu($naziv, $sati,){
        $s= new stdClass();
        $s->naziv=$naziv;
        $s->sati=$sati;
        return $s;
    }
    
    private function kreirajProizvod($naziv, $narucitelj){
        $p= new stdClass();
        $p->naziv=$naziv;
        $p->narucitelj=$narucitelj;
        return $p;
    }

}

new Start($argc,$argv);