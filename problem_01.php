<?php
    # Write your PHP code from here

    function removeDuplicate($str){

        $newString = "";
        $stringLength= strlen($str);

        for($i=0; $i <$stringLength; $i++){
            if(!str_contains($newString, $str[$i])){
                $newString = $newString. $str[$i];
            }
        };

        return $newString;

    }
    
echo removeDuplicate("another");