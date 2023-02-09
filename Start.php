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
        echo '1. Overview workers' . PHP_EOL;
        echo '2. Insert worker' . PHP_EOL;
        echo '3. Change worker' . PHP_EOL;
        echo '4. Delete worker' . PHP_EOL;
        echo '5. Back to - Main Menu' . PHP_EOL;
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
                    $this->overviwWorkers();
                }                
                break;
            case 2:
                $this->insertWorker();
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
                    $this->overviwShifts();
                }                
                break;
            case 2:
                $this->insertShift();
                break;            
            case 3:
                if(count($this->shifts)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no shifts in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->shiftsMenu();
                }else{
                    $this->changeShift();
                }                
                break;
            case 4:
                if(count($this->shifts)===0){
                    echo '===============================' . PHP_EOL;
                    echo 'There is no shifts in the APP!' . PHP_EOL;
                    echo '===============================' . PHP_EOL;
                    $this->ShiftsMenu();
                }else{
                    $this->deleteSift();
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
                $this->insertProduct();
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





}

new Start();