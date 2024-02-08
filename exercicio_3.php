<?php

for($ano = 1980; $ano <= 2024; $ano++){
    if($ano%4 == 0){
        if($ano%100 == 0){
            if($ano%400 == 0){
                print($ano . "\n");
            }
        }else{
            print($ano . "\n");
        }
    }
}
