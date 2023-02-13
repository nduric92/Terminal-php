<?php

class Pomocno{

    public static function brojRaspon($poruka,$min,$max){
        while(true){
            $i=readline($poruka);
            $i=trim($i);
            if(strlen($i)===0){
                echo 'Obavezan unos' . PHP_EOL;
                continue;
            }
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo 'Unos mora biti izmedju ' . $min . ' i ' . $max . PHP_EOL;
                continue;
            }
            return $i;
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

    public static function brojRasponP($poruka,$min,$max){
        while(true){
            $i=readline($poruka);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo ' ' . PHP_EOL;
                echo 'Proizvod je vec obrisan! ' . PHP_EOL;
                echo ' ' . PHP_EOL;
                break;
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

    public static function unosDatuma($poruka){
        while (true){
            $p=readline($poruka);
            $p=trim($p);
    
            $g=(int)substr($p,0,4);
             if ($g<2023 || $g>2030){
                echo 'Broj godina mora biti između 2023 i 2030 ' . PHP_EOL;
                continue;
             }  
    
            $m=(int)substr($p,5,2);
            if ($m>12 || $m<1){
                echo 'Broj mjeseci mora biti između 1 i 12 ' . PHP_EOL;
                continue;
            }              
    
            $d=(int)substr($p,8,2);
            if ($d>31 || $d<1){
                echo 'Broj dana mora biti između 1 i 31 ' . PHP_EOL;
                continue;
            }            
            return $p;
        }    
    }

}