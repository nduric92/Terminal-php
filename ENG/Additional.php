<?php

class Additional{

    public static function rangeNumber($message, $min, $max){
        while(true){
            $i=readline($message);
            $i=trim($i);
            if(strlen($i)===0){
                echo 'mandatory entry' . PHP_EOL;
                continue;
            }
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo 'Insert has to be between ' . $min . ' and ' . $max . PHP_EOL;
                continue;
            }
            return $i;
        }        
    }

    public static function rangeNumber2($message, $min, $max){
        while(true){
            $i=readline($message);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo ' ' . PHP_EOL;
                echo 'Worker aleredy deleted!' . PHP_EOL;
                echo ' ' . PHP_EOL;
                break;
            }
            return $i;
        }        
    }

    public static function rangeNumberP($message, $min, $max){
        while(true){
            $i=readline($message);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo ' ' . PHP_EOL;
                echo 'Product already deleted!' . PHP_EOL;
                echo ' ' . PHP_EOL;
                break;
            }
            return $i;
        }        
    }

    public static function insertText($message){
        while(true){
            $i=readline($message);
            $i=trim($i);
            if(strlen($i)===0){
                echo 'mandatory entry of text' . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function insertDecimalNumber($message){
        while(true){
            $i=readline($message);
            $i=(double)$i;
            if($i<=0){
                echo 'Number has to be higher then 0' . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function insertNumber($message){
        while(true){
            $i=readline($message);
            $i=(int)$i;
            if($i<=0){
                echo 'Number has to be higher then 0' . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function insertDate($message){
        while(true){
            $i=readline($message);
            $i=trim($i);

            $y=(int)substr($i,0,4);
             if ($y<2023 || $y>2030){
                echo 'Number of years has to be between 2023 i 2030 ' . PHP_EOL;
                continue;
             }  
    
            $m=(int)substr($i,5,2);
            if ($m>12 || $m<1){
                echo 'Number of months has to be between 1 i 12 ' . PHP_EOL;
                continue;
            }              
    
            $d=(int)substr($i,8,2);
            if ($d>31 || $d<1){
                echo 'Number of days has to be between 1 i 31 ' . PHP_EOL;
                continue;
            }            
            return $i;
        }
    }

    




}