<?php


class CaesarCipher
{
    /*
        * 1. Caesar Cipher
        * 2. Monoalphabetic Ciphers
        * 3. PlayFair Cipher
        * 4. Molyalphabetic Ciphers
        */
    public  $alphaSmall =[];
    public  $alphaCapital =[];
    function __construct(){
        $this->alphaSmall=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $this->alphaCapital=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    }
    function getCurrentLocation($letter,$smallOrCapital){
        if($smallOrCapital == 'small'){
            $array = $this->alphaSmall;
        }elseif ($smallOrCapital == 'capital'){
            $array = $this->alphaCapital;
        }else{
            $array = [];
        }
        for($i=0;$i<count($array);$i++){
            if($array[$i] == $letter){
                return $i;
            }elseif ($array[$i] == ''){
                continue;
            }
        }
    }
    function getNewChar($char,$InputIsSmaLlOrCapital,$digits,$outputsIsSmallOrCapital){
        $charLocation = $this->getCurrentLocation($char,$InputIsSmaLlOrCapital);
        $newLocation = $charLocation + $digits;
        if($outputsIsSmallOrCapital == 'small'){
            return $this->alphaSmall[$newLocation];
        }else{
            return $this->alphaCapital[$newLocation];
        }
    }
    function CaesarCipher($plainText,$digit){
        $cipherText='';
        for($i=0;$i< strlen($plainText);$i++ ){
            $char= $this->getNewChar($plainText[$i],'small',$digit,'capital');
            if($char) {
                $cipherText[$i] = $char;
            }
        }
        return $cipherText;
    }

}
$CaesarCipher = new CaesarCipher();

//echo $CaesarCipher->CaesarCipher('abc',3);