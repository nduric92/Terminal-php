<?php

include_once 'Pomocno.php';

class Pocetak{

    private $radnici;
    private $smjena;
    private $proizvodi;
    private $proizvodniciklus;
    private $dev;

    public function __construct(){
        $this -> radnici=[];
        $this -> smjena=[];
        $this -> proizvodi=[];
        $this -> proizvodniciklus=[];
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
        echo '4. Proizvodni ciklus' . PHP_EOL;
        echo '5. Izlaz iz programa - EXIT' . PHP_EOL;
        echo '               ' . PHP_EOL;
        $this->opcijaGlavniIzbornik();
    }

    private function opcijaGlavniIzbornik(){
        switch(Pomocno::brojRaspon('Odaberi opciju: ',1,5)){
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
                $this->proizvodniCiklusIzbornik();
                break;
            case 5:
                echo '===========' . PHP_EOL;
                echo 'DOVIDJENJA!' . PHP_EOL;
                echo '===========' . PHP_EOL;
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

    //=============================//
    //  PROIZVODNI CIKLUS IZBORNIK //
    //=============================//

    private function proizvodniCiklusIzbornik(){
        echo '                          ' . PHP_EOL;
        echo 'PROIZVODNI CIKLUS IZBORNIK' . PHP_EOL;
        echo '==========================' . PHP_EOL;        
        echo '1. Pregled proizvodnih ciklusa' . PHP_EOL;
        echo '2. Unos proizvodnog ciklusa' . PHP_EOL;
        echo '3. Izmjena proizvodnog ciklusa' . PHP_EOL;
        echo '4. Brisanje proizvodnog ciklusa' . PHP_EOL;
        echo '5. Povratak - Glavni izbornik' . PHP_EOL;
        echo '                          ' . PHP_EOL;
        $this->opcijaProizvodniCiklusIzbornik();
    }

    private function opcijaProizvodniCiklusIzbornik(){
        switch(Pomocno::brojRaspon('Odaberi opciju: ',1,5)){
            case 1:
                if(count($this->proizvodniciklus)===0){
                    echo '===============================================' . PHP_EOL;
                    echo 'Nema unesenih proizvodnih ciklusa u aplikaciji!' . PHP_EOL;
                    echo '===============================================' . PHP_EOL;
                    $this->proizvodniCiklusIzbornik();
                }else{
                    $this->pregledProizvodnihCiklusa();
                }                
                break;
            case 2:
                $this->unosProizvodnihCiklusa();
                break;
            case 3:
                if(count($this->proizvodniciklus)===0){
                    echo '===============================================' . PHP_EOL;
                    echo 'Nema unesenih proizvodnih ciklusa u aplikaciji!' . PHP_EOL;
                    echo '===============================================' . PHP_EOL;
                    $this->proizvodniCiklusIzbornik();
                }else{
                    $this->izmjenaProizvodnihCiklusa();
                }
                break;
            case 4:
                if(count($this->proizvodniciklus)===0){
                    echo '===============================================' . PHP_EOL;
                    echo 'Nema unesenih proizvodnih ciklusa u aplikaciji!' . PHP_EOL;
                    echo '===============================================' . PHP_EOL;
                    $this->proizvodniCiklusIzbornik();
                }else{
                    $this->brisanjeProizvodnihCiklusa();
                }                
                break;
            case 5:
                $this->glavniIzbornik();
                break;
            default:
            $this -> proizvodniCiklusIzbornik();
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
            echo $rb++ . '. ' . $radnik->ime . ' ' . $radnik->prezime . ' - ID: (' . $radnik->id .')' . PHP_EOL;
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
        $r->id = Pomocno::unosBroja('Unesite ID radnika:');
        $r->ime = Pomocno::unosTeksta('Unesite ime radnika:');
        $r->prezime = Pomocno::unosTeksta('Unesite prezime radnika:');        
        $r->placa = Pomocno::unosDecimalnogBroja('Unesite preporucenu placu radnika (EUR):');
        $r->brojugovora = Pomocno::unosBroja('Unesite broj ugovora radnika:');
        $r->iban = Pomocno::unosBroja('Unesite IBAN broj radnika:');
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
        $this->radnici[$rb]->brojugovora = Pomocno::unosDecimalnogBroja('Unesite ispravak broja ugovora (' . 
        $this->radnici[$rb]->brojugovora 
        .'): ', $this->radnici[$rb]->brojugovora);
        $this->radnici[$rb]->iban = Pomocno::unosDecimalnogBroja('Unesite ispravak IBAN broja radnika (' . 
        $this->radnici[$rb]->iban 
        .'): ', $this->radnici[$rb]->iban);

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
            echo $rb++ . '. ' . $s->naziv . ' - ID: (' . $s->id .')' . PHP_EOL;
            $rbr=0;
            foreach($s->radnici as $r){
                echo "\t" . ++$rbr . '. ' . $r->ime . ' ' . $r->prezime . ' - ID: (' . $r->id .')' . PHP_EOL;
            }         
        }

        echo '===========' . PHP_EOL;
        if($prikazismjene){
            $this->smjenaIzbornik();
        }
    }

    //  UNOS

    private function unosSmjene(){
        $s=new stdClass();
        $s->id = Pomocno::unosBroja('Unesite ID smjene: ');
        $s->naziv = Pomocno::unosTeksta('Unesite naziv smjene: ');
        $s->trajanje = Pomocno::unosDecimalnogBroja('Unesite broj radnih sati u tjednu:');
        
        


        $s->radnici=[];
        echo '                      ' . PHP_EOL;
        echo 'Unesi radnike smjene: ' . PHP_EOL;
        echo '----------------------' . PHP_EOL;
        if(Pomocno::brojRaspon('1 - Unos,  0 - prekid: ',0,1)===1){
            if(count($this->radnici)===0){
                echo '----------------------------------' . PHP_EOL;
                echo 'Nema unesenih radnika u aplikaciji' . PHP_EOL;
                echo '----------------------------------' . PHP_EOL;
            }else{
                while(true){
                    $this->odabirRadnika();
                    $rb = Pomocno::brojRaspon('Odaberi radnika: ',1,count($this->radnici));
                    $rb--;
                    if(!in_array($this->radnici[$rb],$s->radnici)){
                        $s->radnici[] = $this->radnici[$rb];
                    }else{
                        echo ' ' . PHP_EOL;
                        echo 'Odabrani radnik postoji u smjeni!' . PHP_EOL;
                    }
                    if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                        break;
                    }
                }
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
        $this->smjena[$rb]->id = Pomocno::unosBroja('Unesite ispravak ID smjene (' .
        $this->smjena[$rb]->id
        .'): ', $this->smjena[$rb]->id);
        $this->smjena[$rb]->naziv = Pomocno::unosTeksta('Unesite ispravak naziva smjene (' .
        $this->smjena[$rb]->naziv
        .'): ', $this->smjena[$rb]->naziv);
        $this->smjena[$rb]->trajanje = Pomocno::unosDecimalnogBroja('Unesite ispravak broja sati u tjednu (' .
        $this->smjena[$rb]->trajanje
        .'): ', $this->smjena[$rb]->trajanje);

        echo '                           ' . PHP_EOL;
        echo '===========================' . PHP_EOL;
        echo 'Dodavanje radnika na smjenu' . PHP_EOL;
        echo '===========================' . PHP_EOL;

        if(Pomocno::brojRaspon('1 - Dodaj, 0 - Odustani: ',0,1)===1){
            if(count($this->radnici)===0){
                echo '-------------------------' . PHP_EOL;
                echo 'Nema radnika u aplikaciji' . PHP_EOL;
                echo '-------------------------' . PHP_EOL;
            }else{
                while(true){
                    echo '                             ' . PHP_EOL;
                    echo '=============================' . PHP_EOL;
                    echo 'Dodavanje radnika na smjenu: ' . PHP_EOL;
                    echo '=============================' . PHP_EOL;
                    $this->odabirRadnika();
                    $rbr = Pomocno::brojRaspon('Odaberi radnika: ',1,count($this->radnici));
                    $rbr--;
                    if(!in_array($this->radnici[$rbr],$this->smjena[$rb]->radnici)){
                        $this->smjena[$rb]->radnici[]=$this->radnici[$rbr];
                    }else{
                        echo ' ' . PHP_EOL;
                        echo 'Odabrani radnik postoji u smjeni!' . PHP_EOL;
                    }
                    if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                        break;
                    }
                }
            }
        }

        echo '                         ' . PHP_EOL;
        echo '=========================' . PHP_EOL;
        echo 'Brisanje radnika u smjeni' . PHP_EOL;
        echo '=========================' . PHP_EOL;
        
        if(Pomocno::brojRaspon('1 - Brisanje,  0 - prekid: ',0,1)===1){
            if(count($this->radnici)===0){
                echo '---------------------' . PHP_EOL;
                echo 'Nema radnika u smjeni' . PHP_EOL;
                echo '---------------------' . PHP_EOL;
            }else{
                while(true){
                    echo '                         ' . PHP_EOL;
                    echo '=========================' . PHP_EOL;
                    echo 'Brisanje radnika smjene: ' . PHP_EOL;
                    echo '=========================' . PHP_EOL;
                    $this->odabirRadnika($this->smjena[$rb]->radnici);
                    $rbr = Pomocno::brojRaspon2('Odaberi radnika: ',1,count($this->smjena[$rb]->radnici));
                    $rbr--;
                    array_splice($this->smjena[$rb]->radnici,$rbr,1);
            
                    if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                        break;
                    }
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

    private function pregledProizvoda($prikaziproizvode = true){
        echo '==========' . PHP_EOL;
        echo 'Proizvodi:' . PHP_EOL;
        echo '==========' . PHP_EOL;
        $rb=1;
        foreach($this->proizvodi as $proizvod){
            echo $rb++ . '. ' . $proizvod->naziv . ' - Narucitelj: (' . $proizvod->narucitelj .')' . PHP_EOL;
        }
        echo '==========' . PHP_EOL;
        if($prikaziproizvode){
            $this->proizvodIzbornik();
        }
    }

    private function odabirProizvoda($prikaziproizvode = true){
        echo '==========' . PHP_EOL;
        echo 'Proizvodi:' . PHP_EOL;
        echo '==========' . PHP_EOL;
        $rb=1;
        foreach($this->proizvodi as $proizvod){
            echo $rb++ . '. ' . $proizvod->naziv . ' - Narucitelj: (' . $proizvod->narucitelj .')' . PHP_EOL;
        }
        echo '==========' . PHP_EOL;
        if($prikaziproizvode){
        }
    }

    //  UNOS

    private function unosProizvoda(){
        $p=new stdClass();
        $p->id = Pomocno::unosBroja('Unesite ID proizvoda: ');
        $p->naziv = Pomocno::unosTeksta('Unesite naziv proizvoda: ');
        $p->boja = Pomocno::unosTeksta('Unesite boju proizvoda: ');
        $p->cijena = Pomocno::unosDecimalnogBroja('Unesite jedinicnu cijenu proizvoda (EUR): ');
        $p->narucitelj = Pomocno::unosTeksta('Unesite naziv narucitelja:');
        $this->proizvodi[]=$p;
        echo '===============' . PHP_EOL;
        echo 'PROIZVOD DODAN!' . PHP_EOL;
        echo '===============' . PHP_EOL;
        $this->proizvodIzbornik();
    }

    //  IZMJENA

    private function izmjenaProizvoda(){
        $this->pregledProizvoda(false);
        $rb=Pomocno::brojRaspon('Odaberite Proizvod: ',1,count($this->proizvodi));
        $rb--;
        $this->proizvodi[$rb]->id = Pomocno::unosBroja('Unesite ispravak ID proizvoda (' .
        $this->proizvodi[$rb]->id
        .'): ', $this->proizvodi[$rb]->id);
        $this->proizvodi[$rb]->naziv = Pomocno::unosTeksta('Unesite ispravak naziva proizvoda (' .
        $this->proizvodi[$rb]->naziv
        .'): ', $this->proizvodi[$rb]->naziv);
        $this->proizvodi[$rb]->boja = Pomocno::unosTeksta('Unesite ispravak boje proizvoda (' .
        $this->proizvodi[$rb]->boja
        .'): ', $this->proizvodi[$rb]->boja);
        $this->proizvodi[$rb]->cijena = Pomocno::unosDecimalnogBroja('Unesite ispravak cijene proizvoda (EUR) (' .
        $this->proizvodi[$rb]->cijena
        .'): ', $this->proizvodi[$rb]->cijena);
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

    //======================================================//
    //  PROIZVODNI CIKLUS - PREGLED/UNOS/IZMJENA/BRISANJE   //
    //======================================================//

    //  PREGLED

    private function pregledProizvodnihCiklusa($prikaziproizvodniciklus = true){
        echo '==================' . PHP_EOL;
        echo 'Proizvodni ciklus:' . PHP_EOL;
        echo '==================' . PHP_EOL;
        $rb=1;
        foreach($this->proizvodniciklus as $pc){
            echo $rb++ . '. ' . $pc->dan . ' - Kolicina: ('. $pc->kolicina . ')' .  PHP_EOL;                
            foreach($pc->proizvodi as $p){
                echo "\t" . ++$rb . '. ' . $p->naziv . ' - Narucitelj: (' . $p->narucitelj . ')' . PHP_EOL;
                $rbr=0;
                foreach($pc->radnici as $r){
                    echo "\t" . ++$rbr . '. ' . $r->ime . ' ' . $r->prezime . ' - ID: (' . $r->id .')' . PHP_EOL;
                }
            }     
        }

        echo '===========' . PHP_EOL;
        if($prikaziproizvodniciklus){
            $this->proizvodniCiklusIzbornik();
        }
    }

    //  UNOS

    private function unosProizvodnihCiklusa(){
        $pc=new stdClass();
        $pc->kolicina = Pomocno::unosBroja('Unesite kolicinu proizvedenih proizvoda: ');
        $pc->dan = Pomocno::unosDatuma('Unesite datum(YYYY.MM.DD): ');

        $pc->proizvodi=[];
        echo '                               ' . PHP_EOL;
        echo 'Unesi proizvod na proizvodnji: ' . PHP_EOL;
        echo '-------------------------------' . PHP_EOL;
        if(Pomocno::brojRaspon('1 - Unos,  0 - prekid: ',0,1)===1){
            if(count($this->proizvodi)===0){
                echo '------------------------------------' . PHP_EOL;
                echo 'Nema unesenih proizvoda u aplikaciji' . PHP_EOL;
                echo '------------------------------------' . PHP_EOL;
            }else{
                while(true){
                    $this->odabirProizvoda();
                    $rb = Pomocno::brojRaspon('Odaberi proizvod: ',1,count($this->proizvodi));
                    $rb--;
                    if(!in_array($this->proizvodi[$rb],$pc->proizvodi)){
                        $pc->proizvodi[] = $this->proizvodi[$rb];
                    }else{
                        echo ' ' . PHP_EOL;
                        echo 'Odabrani proizvod dodan na proizvodnju!' . PHP_EOL;
                    }
                    if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                        break;
                    }
                }
            }
        }

        $pc->radnici=[];
        echo '                              ' . PHP_EOL;
        echo 'Unesi radnika na proizvodnji: ' . PHP_EOL;
        echo '------------------------------' . PHP_EOL;
        if(Pomocno::brojRaspon('1 - Unos,  0 - prekid: ',0,1)===1){
            if(count($this->radnici)===0){
                echo '----------------------------------' . PHP_EOL;
                echo 'Nema unesenih radnika u aplikaciji' . PHP_EOL;
                echo '----------------------------------' . PHP_EOL;
            }else{
                while(true){
                    $this->odabirRadnika();
                    $rb = Pomocno::brojRaspon('Odaberi radnika: ',1,count($this->radnici));
                    $rb--;
                    if(!in_array($this->radnici[$rb],$pc->radnici)){
                        $pc->radnici[] = $this->radnici[$rb];
                    }else{
                        echo ' ' . PHP_EOL;
                        echo 'Odabrani radnik dodan na proizvodnju!' . PHP_EOL;
                    }
                    if(Pomocno::brojRaspon('1 - nastavi, 0 - prekid: ',0,1)===0){
                        break;
                    }
                }
            }
        }

        $this->proizvodniciklus[]=$pc;
        echo '========================' . PHP_EOL;
        echo 'PROIZVODNI CIKLUS DODAN!' . PHP_EOL;
        echo '========================' . PHP_EOL;
        $this->proizvodniCiklusIzbornik();
    }



}

new Pocetak();