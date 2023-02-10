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


    public static function unosTeksta($poruka){
        while(true){
            $s=readline($poruka);
            $s=trim($s);
            if(strlen($s)===0){
                echo 'Obavezan unos' . PHP_EOL;
                continue;
            }
            return $s;
        }
    }

    public static function unosDecimalnogBroja($poruka){
        while(true){
            $s=readline($poruka);
            $s=(double)$s;
            if($s<=0){
                echo 'Broj mora biti veci od nula' . PHP_EOL;
                continue;
            }
            return $s;
        }
    }

    public static function unosBroja($poruka){
        while(true){
            $s=readline($poruka);
            $s=(int)$s;
            if($s<=0){
                echo 'Broj mora biti veci od nula' . PHP_EOL;
                continue;
            }
            return $s;
        }
    }

    public static function brojRaspon2($poruka,$min,$max){
        while(true){
            $i=readline($poruka);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo ' ' . PHP_EOL;
                echo 'Radnik je vec obrisan! ' . PHP_EOL;
                echo ' ' . PHP_EOL;
                break;
            }
            return $i;
        }
    }


}