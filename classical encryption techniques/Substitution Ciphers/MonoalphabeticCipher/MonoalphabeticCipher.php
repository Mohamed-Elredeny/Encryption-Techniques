<?php
require_once '../CaesarCipher/CaesarCipher.php';

class MonoalphabeticCipher
{
    public  $alphaSmall =[];

    public $alphaCapital;
    function __construct($alphaCapital)
    {
        $this->alphaSmall=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $this->alphaCapital = $alphaCapital;
    }
    function getCurrentLocation($letter,$smallOrCapital){
        if($smallOrCapital == 'small'){
            $array = $this->alphaSmall;
        }elseif ($smallOrCapital == 'capital'){
            $array = $this->alphaCapital;
        }else{
            $array = [];
        }

        for ($i = 0; $i < count($array); $i++) {
            if($array[$i] == $letter){
                return $i;
            }
        }


    }
    function getNewChar($char,$InputIsSmaLlOrCapital,$digits,$outputsIsSmallOrCapital){
        $charLocation = $this->getCurrentLocation($char,$InputIsSmaLlOrCapital);
        if (is_numeric($charLocation)){
            $newLocation = $charLocation + $digits;
            if($outputsIsSmallOrCapital == 'small'){
                return $this->alphaSmall[$newLocation];
            }else{
                return $this->alphaCapital[$newLocation];
            }
        }
    }
    function CaesarCipher($plainText,$digit){
        $cipherText='';
        for($i=0;$i< strlen($plainText);$i++ ){
               $char = $this->getNewChar($plainText[$i], 'small', $digit, 'capital');
               if($char) {
                $cipherText[$i] = $char;
               }
        }
        return $cipherText;
    }



}
//Get Random Number from user
//Shifts by default equal 0
$alphaCapital = ['Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
$MonoalphabeticCipher = new MonoalphabeticCipher($alphaCapital);

$plainText = 'fire on my orders';
echo $MonoalphabeticCipher->CaesarCipher($plainText,0);


