<?php

class Pomocno{
    
    public static function brojRaspon($poruka,$min,$max){
        while(true){
            $i=readline($poruka);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo 'Unos mora biti izmedju ' . $min . ' i ' . $max . PHP_EOL;
                continue;
            }
            return $i;
        }
    }






}