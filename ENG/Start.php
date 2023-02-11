<?php

include_once 'Additional.php';

class Start{
    
    private $workers;
    private $shifts;
    private $products;

    public function __construct(){
        $this -> workers=[];
        $this -> shifts=[];
        $this -> products=[];
        $this -> helloMassage();
        $this -> mainMenu();
    }

    //==================//
    //  HELLO MASSAGE   //
    //==================//

    private function helloMassage(){
        echo '                                      ' . PHP_EOL;
        echo '======================================' . PHP_EOL;
        echo 'Wellcome to Product Plast terminal APP' . PHP_EOL;
        echo '======================================' . PHP_EOL;
    }

    //==============//
    //  MAIN MENU   //
    //==============//

    private function mainMenu(){
        echo '              ' . PHP_EOL;
        echo '  MAIN MENU   ' . PHP_EOL;
        echo '==============' . PHP_EOL;
        echo '1.    Workers' . PHP_EOL;
        echo '2.    Shifts' . PHP_EOL;
        echo '3.    Products' . PHP_EOL;
        echo '4.    EXIT the APP' . PHP_EOL;
        echo '              ' . PHP_EOL;
        $this->optionMainMenu();
    }

    private function optionMainMenu(){
        switch(Additional::rangeNumber('Select option: ',1,4)){
            case 1:
                $this->workersMenu();
                break;
            case 2:
                $this->shiftsMenu();
                break;
            case 3:
                $this->productsMenu();
                break;
            case 4:
                echo '==============' . PHP_EOL;
                echo '  GOOD BYE!   ' . PHP_EOL;
                echo '==============' . PHP_EOL;
                break;
            default:
                $this->mainMenu();
        }
    }

    //=================//
    //  WORKERS MENU   //
    //=================//

    private function workersMenu(){
        echo '            ' . PHP_EOL;
        echo 'WORKERS MENU' . PHP_EOL;
        echo '============' . PHP_EOL;
        echo '1.    Overview workers' . PHP_EOL;
        echo '2.    Insert worker' . PHP_EOL;
        echo '3.    Change worker' . PHP_EOL;
        echo '4.    Delete worker' . PHP_EOL;
        echo '5.    Back to - Main Menu' . PHP_EOL;
        echo '               ' . PHP_EOL;
        $this->optionWorkersMenu();
    }

    private function optionWorkersMenu(){
        switch(Additional::rangeNumber('Select option: ',1,5)){
            case 1:
                if(count($this->workers)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no workers in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->workersMenu();
                }else{
                    $this->overviewWorkers();
                }                
                break;
            case 2:
                $this->insertWorkers();
                break;            
            case 3:
                if(count($this->workers)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no workers in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->workersMenu();
                }else{
                    $this->changeWorkers();
                }                
                break;
            case 4:
                if(count($this->workers)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no workers in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->workersMenu();
                }else{
                    $this->deleteWorkers();
                }                
                break;
            case 5:
                $this->mainMenu();
                break;
            default:
            $this->workersMenu();
        }
    }

    //===============//
    //  SHIFT MENU   //
    //===============//

    private function shiftsMenu(){
        echo '          ' . PHP_EOL;
        echo 'SHIFT MENU' . PHP_EOL;
        echo '==========' . PHP_EOL;
        echo '1.    Overview shift' . PHP_EOL;
        echo '2.    Insert shift' . PHP_EOL;
        echo '3.    Change shift' . PHP_EOL;
        echo '4.    Delete shift' . PHP_EOL;
        echo '5.    Back to - Main Menu' . PHP_EOL;
        echo '               ' . PHP_EOL;
        $this->optionShiftsMenu();
    }

    private function optionShiftsMenu(){
        switch(Additional::rangeNumber('Select option: ',1,5)){
            case 1:
                if(count($this->shifts)===0){
                    echo '==============================' . PHP_EOL;
                    echo 'There is no shifts in the APP!' . PHP_EOL;
                    echo '==============================' . PHP_EOL;
                    $this->shiftsMenu();
                }else{
                    $this->overviewShifts();
                }                
                break;
            case 2:
                $this->insertShifts();
                break;            
            case 3:
                if(count($this->shifts)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no shifts in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->shiftsMenu();
                }else{
                    $this->changeShifts();
                }                
                break;
            case 4:
                if(count($this->shifts)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no shifts in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->ShiftsMenu();
                }else{
                    $this->deleteShifts();
                }                
                break;
            case 5:
                $this->mainMenu();
                break;
            default:
            $this->shiftsMenu();
        }
    }

    //===============//
    //  PRODUCT MENU //
    //===============//

    private function productsMenu(){
        echo '            ' . PHP_EOL;
        echo 'PRODUCT MENU' . PHP_EOL;
        echo '============' . PHP_EOL;
        echo '1.    Overview products' . PHP_EOL;
        echo '2.    Insert product' . PHP_EOL;
        echo '3.    Change product' . PHP_EOL;
        echo '4.    Delete product' . PHP_EOL;
        echo '5.    Back to - Main Menu' . PHP_EOL;
        echo '               ' . PHP_EOL;
        $this->optionProductsMenu();
    }

    private function optionProductsMenu(){
        switch(Additional::rangeNumber('Odaberi opciju: ',1,5)){
            case 1:
                if(count($this->products)===0){
                    echo '================================' . PHP_EOL;
                    echo 'There is no products in the APP!' . PHP_EOL;
                    echo '================================' . PHP_EOL;
                    $this->productsMenu();
                }else{
                    $this->overviewProducts();
                }                
                break;
            case 2:
                $this->insertProducts();
                break;
            case 3:
                if(count($this->products)===0){
                    echo '================================' . PHP_EOL;
                    echo 'There is no products in the APP!' . PHP_EOL;
                    echo '================================' . PHP_EOL;
                    $this->productsMenu();
                }else{
                    $this->changeProducts();
                }
                break;
            case 4:
                if(count($this->products)===0){
                    echo '================================' . PHP_EOL;
                    echo 'There is no products in the APP!' . PHP_EOL;
                    echo '================================' . PHP_EOL;
                    $this->productsMenu();
                }else{
                    $this->deleteProducts();
                }                
                break;
            case 5:
                $this->mainMenu();
                break;
            default:
            $this -> productsMenu();
        }
    }

    //==========================================//
    //  WORKERS - OVERVIEW/INSERT/CHANGE/DELETE //
    //==========================================//

    //  OVERVIEW

    private function overviewWorkers($showworkers = true){
        echo '============' . PHP_EOL;
        echo 'All workers:' . PHP_EOL;
        echo '============' . PHP_EOL;
        $on=1;
        foreach ($this->workers as $worker){
            echo $on++ . '. ' . $worker->name . ' ' . $worker->lastname . PHP_EOL;
        }
        echo '============' . PHP_EOL;
        if($showworkers){   
            $this->workersMenu();
        }
    }

    private function selectWorkers($showworkers = true){
        echo '============' . PHP_EOL;
        echo 'All workers:' . PHP_EOL;
        echo '============' . PHP_EOL;
        $on=1;
        foreach ($this->workers as $worker){
            echo $on++ . '. ' . $worker->name . ' ' . $worker->lastname . PHP_EOL;
        }
        echo '============' . PHP_EOL;
        if($showworkers){
        }
    }

    //  INSERTS

    private function insertWorkers(){
        $w=new stdClass();
        $w->name = Additional::insertText('Insert workers name:');
        $w->lastname = Additional::insertText('Insert workers last name:');
        $w->id = Additional::insertNumber('Insert workers id:');
        $w->salary = Additional::insertDecimalNumber('Insert recommended salary (EUR):');
        $this->workers[]=$w;
        echo '============' . PHP_EOL;
        echo 'WORKER ADDED' . PHP_EOL;
        echo '============' . PHP_EOL;
        $this->workersMenu();
    }

    //  CHANGE

    private function changeWorkers(){
        $this->overviewWorkers(false);
        $on=Additional::rangeNumber('Select worker: ',1,count($this->workers));
        $on--;
        $this->workers[$on]->name = Additional::insertText('Insert the name correction (' .
        $this->workers[$on]->name
        .'): ', $this->workers [$on]->name);
        $this->workers[$on]->lastname = Additional::insertText('Insert the lastname correction (' .
        $this->workers[$on]->lastname
        .'): ', $this->workers [$on]->lastname);
        $this->workers[$on]->id = Additional::insertNumber('ID correction (' .
        $this->workers[$on]->id
        .'): ', $this->workers [$on]->id);
        $this->workers[$on]->salary = Additional::insertDecimalNumber('Salary correction (' .
        $this->workers[$on]->salary
        .'): ', $this->workers [$on]->salary);

        echo '==============' . PHP_EOL;
        echo 'WORKER CHANGED' . PHP_EOL;
        echo '==============' . PHP_EOL;
        $this->workersMenu();
    }

    //  DELETE

    private function deleteWorkers(){
        $this->overviewWorkers(false);
        $on=Additional::rangeNumber('Select workers: ',1,count($this->workers));
        $on--;
        array_splice($this->workers,$on,1);
        echo '==============' . PHP_EOL;
        echo 'WORKER DELETED' . PHP_EOL;
        echo '==============' . PHP_EOL;
        $this->workersMenu();
    }

    //=========================================//
    //  SHIFTS - OVERVIEW/INSERT/CHANGE/DELETE //
    //=========================================//

    //  OVERVIEW

    private function overviewShifts($showshifts = true){
        echo '===========' . PHP_EOL;
        echo 'All Shifts:' . PHP_EOL;
        echo '===========' . PHP_EOL;
        $on=1;
        foreach ($this->shifts as $shift){
            echo $on++ . '. ' . $shift->name . ' ' . $shift->duration . PHP_EOL;
            $onw=0;
            foreach($shift->workers as $w){
                echo "\t" . ++$onw . '. ' . $w->name . ' ' . $w->lastname . PHP_EOL;
            }
        }
        echo '============' . PHP_EOL;
        if($showshifts){   
            $this->shiftsMenu();
        }
    }

    //  INSERTS

    private function insertShifts(){
        $s=new stdClass();
        $s->name = Additional::insertText('Insert shift name: ');
        $s->duration = Additional::insertDecimalNumber('Insert number of working hours in a week: ');

        $s->workers=[];
        echo '                       ' . PHP_EOL;
        echo 'Insert workers in shift' . PHP_EOL;
        echo '-----------------------' . PHP_EOL;
        if(Additional::rangeNumber('1 - Insert,  0 - abort: ',0,1)===1){
            if(count($this->workers)===0){
                echo '------------------------------' . PHP_EOL;
                echo 'There is no workers in the APP' . PHP_EOL;
                echo '------------------------------' . PHP_EOL;
            }else{
                while(true){
                    $this->selectWorkers();
                    $on=Additional::rangeNumber('Select workers: ',1,count($this->workers));
                    $on--;
                    if(!in_array($this->workers[$on],$s->workers)){
                        $s->workers[] = $this->workers[$on];
                    }else{
                        echo ' ' . PHP_EOL;
                        echo 'Selected worker already exists in shift!' . PHP_EOL;
                    }
                    if(Additional::rangeNumber('1 - continue, 0 - abbort: ',0,1)===0){
                        break;
                    }
                }
            }
        }
        $this->shifts[]=$s;
        echo '============' . PHP_EOL;
        echo 'SHIFT ADDED!' . PHP_EOL;
        echo '============' . PHP_EOL;
        $this->shiftsMenu();
    }

    //  CHANGE

    private function changeShifts(){
        $this->overviewShifts(false);
        $on=Additional::rangeNumber('Select shift: ',1,count($this->shifts));
        $on--;
        $this->shifts[$on]->name = Additional::insertText('Insert shift name correction (' .
        $this->shifts[$on]->name
        .'): ',$this->shifts[$on]->name);
        $this->shifts[$on]->duration = Additional::insertText('Insert shift duration correction (' .
        $this->shifts[$on]->duration
        .'): ',$this->shifts[$on]->duration);

        echo '                         ' . PHP_EOL;
        echo '=========================' . PHP_EOL;
        echo 'Insert workers in shift: ' . PHP_EOL;
        echo '=========================' . PHP_EOL;

        if(Additional::rangeNumber('1 - Insert, 0 - Abort: ',0,1)===1){
            if(count($this->workers)===0){
                echo '------------------------------' . PHP_EOL;
                echo 'There is no workers in the APP' . PHP_EOL;
                echo '------------------------------' . PHP_EOL;
            }else{
                while(true){
                    echo '                         ' . PHP_EOL;
                    echo '=========================' . PHP_EOL;
                    echo 'Adding workers to shift: ' . PHP_EOL;
                    echo '=========================' . PHP_EOL;
                    $this->selectWorkers();
                    $onw=Additional::rangeNumber('Select worker: ',1,count($this->workers));
                    $onw--;
                    if(!in_array($this->workers[$onw],$this->shifts[$on]->workers)){
                        $this->shifts[$on]->workers[]=$this->workers[$onw];
                    }else{
                        echo ' ' . PHP_EOL;
                        echo 'Selected worker already exists in shift!' . PHP_EOL;
                    }
                    if(Additional::rangeNumber('1 - continue, 0 - abort: ',0,1)===0){
                        break;
                    }
                }
            }
        }

        echo '                           ' . PHP_EOL;
        echo '===========================' . PHP_EOL;
        echo 'Delete workers from shift: ' . PHP_EOL;
        echo '===========================' . PHP_EOL;

        if(Additional::rangeNumber('1 - Delete, 0 - Abort: ',0,1)===1){
            if(count($this->workers)===0){
                echo '------------------------------' . PHP_EOL;
                echo 'There is no workers in the APP' . PHP_EOL;
                echo '------------------------------' . PHP_EOL;
            }else{
                while(true){
                    echo '                           ' . PHP_EOL;
                    echo '===========================' . PHP_EOL;
                    echo 'Delete workers from shift: ' . PHP_EOL;
                    echo '===========================' . PHP_EOL;
                    $this->selectWorkers($this->shifts[$on]->workers);
                    $onw=Additional::rangeNumber2('Select worker: ',1,count($this->shifts[$on]->workers));
                    $onw--;
                    array_splice($this->shifts[$on]->workers,$onw,1);

                    if(Additional::rangeNumber('1 - continue, 0 - abort: ',0,1)===0){
                        break;
                    }
                }
            }                
            
        }

        echo '=============' . PHP_EOL;
        echo 'SHIFT CHANGED' . PHP_EOL;
        echo '=============' . PHP_EOL;
        $this->shiftsMenu();

    }

    // DELETE

    private function deleteShifts(){
        $this->overviewShifts(false);
        $on=Additional::rangeNumber('Select shift: ',1,count($this->shifts));
        $on--;
        array_splice($this->shifts,$on,1);
        echo '=============' . PHP_EOL;
        echo 'SHIFT DELETED' . PHP_EOL;
        echo '=============' . PHP_EOL;
        $this->shiftsMenu();
    }

    //===========================================//
    //  PRODUCTS - OVERVIEW/INSERT/CHANGE/DELETE //
    //===========================================//

    //  OVERVIEW

    private function overviewProducts($showproducts = true){
        echo '===========' . PHP_EOL;
        echo 'All Shifts:' . PHP_EOL;
        echo '===========' . PHP_EOL;
        $on=1;
        foreach ($this->products as $products){
            echo $on++ . '. ' . $products->name . ' ' . $products->customer . PHP_EOL;
        }
        echo '============' . PHP_EOL;
        if($showproducts){   
            $this->productsMenu();
        }
    }

    //  INSERTS

    private function insertProducts(){
        $p=new stdClass();
        $p->name = Additional::insertText('Insert products name: ');
        $p->customer = Additional::insertText('Insert products customer: ');
        $this->products[]=$p;
        echo '=============' . PHP_EOL;
        echo 'PRODUCT ADDED' . PHP_EOL;
        echo '=============' . PHP_EOL;
        $this->productsMenu();
    }

    //  CHANGE

    private function changeProducts(){
        $this->overviewProducts(false);
        $on=Additional::rangeNumber('Select product: ',1,count($this->products));
        $on--;
        $this->products[$on]->name = Additional::insertText('Product name correction (' .
        $this->products[$on]->name
        .'): ', $this->products[$on]->name);
        $this->products[$on]->customer = Additional::insertText('Customer correction (' .
        $this->products[$on]->customer
        .'): ', $this->products[$on]->customer);

        echo '================' . PHP_EOL;
        echo 'PRODUCT CHANGED!' . PHP_EOL;
        echo '================' . PHP_EOL;

        $this->productsMenu();
    }


    //  DELETE

    private function deleteProducts(){
        $this->overviewProducts(false);
        $on = Additional::rangeNumber('Select product: ',1,count($this->products));
        $on--;
        array_splice($this->products,$on,1);
        echo '================' . PHP_EOL;
        echo 'PRODUCT DELETED!' . PHP_EOL;
        echo '================' . PHP_EOL;
        $this->productsMenu();
    }

}

new Start();