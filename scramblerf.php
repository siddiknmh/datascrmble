<?php 

function displayKey($key){
    printf(" value='%s' ", $key );
}

function scrambleData($orginalData, $key){
    $orginalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($orginalData);
    for ($i=0; $i < $length; $i++) { 
        $currentChar = $orginalData[$i];
        $position = strpos($orginalKey, $currentChar);
        if ($position !== false) {
            $data .= $key[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}

function decodeData($orginalData, $key){
    $orginalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($orginalData);
    for ($i=0; $i < $length; $i++) { 
        $currentChar = $orginalData[$i];
        $position = strpos($key, $currentChar);
        if ($position !== false) {
            $data .= $orginalKey[$position];
        } else {
            $data .= $currentChar;
        }
    }
    return $data;
}