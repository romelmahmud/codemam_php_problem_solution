<?php

function sortString($str){
  $strToArray = str_split($str);

  sort($strToArray);

  return implode($strToArray);

}


function checkAnagram($str1, $str2){

  $sortedStr1 = sortString($str1);
  $sortedStr2 = sortString($str2);
  
if($sortedStr1 == $sortedStr2){
  echo "YES";
} else {
  echo "NO";
}

}


checkAnagram('abcd', 'aabc');