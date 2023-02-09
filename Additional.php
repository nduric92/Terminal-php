<?php

class Additional{

    public static function rangeNumber($massage, $min, $max){
        while(true){
            $i=readline($massage);
            $i=(int)$i;
            if($i<$min || $i>$max){
                echo 'Insert has to be between ' . $min . ' and ' . $max . PHP_EOL;
                continue;
            }
            return $i;
        }        
    }

    public static function insertText($massage){
        while(true){
            $i=readline($massage);
            $i=trim($i);
            if(strlen($i)===0){
                echo 'mandatory entry of text' . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function insertDecimalNumber($poruka){
        while(true){
            $i=readline($poruka);
            $i=(double)$i;
            if($i<=0){
                echo 'Number has to be higher then 0' . PHP_EOL;
                continue;
            }
            return $i;
        }
    }

    public static function insertNumber($poruka){
        while(true){
            $i=readline($poruka);
            $i=(int)$i;
            if($i<=0){
                echo 'Broj mora biti veci od nula' . PHP_EOL;
                continue;
            }
            return $i;
        }
    }





}