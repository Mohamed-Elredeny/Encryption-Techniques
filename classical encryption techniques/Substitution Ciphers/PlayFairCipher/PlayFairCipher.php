<?php

class PlayFairCipher
{
    public  $alphaSmall =[];
    public  $alphaCapital =[];


    private $plainText;
    private $paris;
    private $dividedText = [];


    private $key;
    private $matrix = array(
        array(),
        array(),
        array(),
        array(),
        array(),
    );


    function __construct($plainText,$key){
        $this->alphaSmall=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $this->alphaCapital=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $this->plainText = $plainText;
        $this->key = $key;
        $TextLength = strlen($this->plainText);
        $this->paris = $TextLength/2;
    }

    function getPairs(){
        $counter=0;
        for($i=0;$i<$this->paris;$i++){
            $this->dividedText[$i] = $this->plainText[$counter] . $this->plainText[$counter+1];
            $counter+=2;
        }
        return $this->dividedText;
    }

    function classifyPairs($pair){
        $length = 2;
    }

    function fillMatrix(){
        $counter=0;
        while($counter <= strlen($this->key)){
            //echo $this->key[$counter];
            $cell = $this->GetCell($counter);
            $row = $cell[0];
            $col = $cell[1];
            $this->matrix[$row][$col] = $this->key[$counter];
            $counter++;
        }
        $start = $this->GetCell($counter);
        $row = $start[0];
        $col = $start[1];

        echo "<br>";
        for ($i=$row;$i<5;$i++){
            if($i == $row) {
                for ($j = $col; $j < 5; $j++) {
                    if (!$this->IsExistInKey($this->alphaCapital[$counter])) {
                        $cell = $this->GetCell($counter);
                        $row = $cell[0];
                        $col = $cell[1];
                        $this->matrix[$row][$col] = $this->alphaCapital[$counter];
                        //echo $this->alphaCapital[$counter];
                    }
                    $counter++;
                }
                echo "<br>";
            }else{
                for ($j = 0; $j < 5; $j++) {
                    if (!$this->IsExistInKey($this->alphaCapital[$counter])) {
                        $cell = $this->GetCell($counter);
                        $row = $cell[0];
                        $col = $cell[1];
                        $this->matrix[$row][$col] = $this->alphaCapital[$counter];
                        //echo $this->alphaCapital[$counter];
                    }
                    $counter++;
                }
                echo "<br>";
            }
        }
    }

    function GetCell($number){
        $row=0;
        $col=0;
        while ($number > 5){
            $number-=5;
            $row++;
        }
        $col =$number;
        return [$row,$col];
    }

    function IsExistInKey($char){
        for($i=0;$i<strlen($this->key);$i++){
            if($char == $this->key[$i]){
                return 1;
            }
        }
        return 0;
    }
    function ViewMatrix(){
        for ($i=0;$i<5;$i++){
            for($j=0;$j<5;$j++){
                echo $this->matrix[$i][$j];
            }
            echo "<br>";
        }
    }
}


$PlayFairCipher = new PlayFairCipher('moka','ABCDEFG');
//$pairs = $PlayFairCipher->getPairs();
$PlayFairCipher->fillMatrix();
//echo $PlayFairCipher->IsExistInKey('v');
$PlayFairCipher->ViewMatrix();
//var_dump($PlayFairCipher->GetCell(0));

