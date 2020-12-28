<?php
require_once '../Controllers/Substitution Ciphers/CaesarCipher/CaesarCipher.php';
require_once '../Controllers/Substitution Ciphers/PlayFairCipher/PlayFairCipher.php';
require_once '../Controllers/Substitution Ciphers/MonoalphabeticCipher/MonoalphabeticCipher.php';
require_once '../Controllers/TranspositionCiphers/RC6/RC6.php';
require_once '../Controllers/TranspositionCiphers/RC5/RC5.php';
require_once '../Controllers/TranspositionCiphers/Viginener/viginener.php';

if(isset($_POST['SelectTechnique'])){
    if($_POST['technique'] && $_POST['technique'] !=null) {
        switch ($_POST['technique']){
            case 'CaesarCipher':
                $CaesarCipher = new CaesarCipher();
                $plainText=$_POST['plainText'];
                $digit = $_POST['digit'];;
                echo
                "<center><h2>The Encrypted Text is : ".
                $CaesarCipher->CaesarCipher($plainText,$digit)
                ."</h2></center>";

                break;
            case 'PlayFairCipher':
                echo "sad";
                break;
            case 'MonoalphabeticCipher':
                $alphaCapital = ['Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
                $MonoalphabeticCipher = new MonoalphabeticCipher($alphaCapital);
                //$plainText = 'fire on my orders';
                $plainText = $_POST['plainText'];
               // $digit=0;
                $digit = $_POST['digit'];
                echo
                    "<center><h2>The Encrypted Text is : ".
                    $MonoalphabeticCipher->CaesarCipher($plainText,$digit)
                    ."</h2></center>";

                break;
            case 'RC5':
                $RC5 = new RC5();
                $data = $_POST['data'];
                $password = $_POST['password'];
                $res  = $RC5->encrypt($data,$password);
                echo "Encrypt : ".$res;
                echo "<br>";
                $res1 = $RC5->decrypt($res,$password);
                echo "Decrypt : ".$res1;
                break;
            case 'RC6':
                $RC6 = new RC6();
                $RC6->index();
                echo "Need to add an extension to the server to be able to use gmp library";
                break;
            case 'Viginener':
                $Viginener = new Viginener();
                $input = $_POST['input'];
                $key = $_POST['key'];
                $encrypt = $Viginener->Encipher($input,$key);
                $decrypt = $Viginener->Decipher($encrypt,$key);
                echo "Encrypt : ".$encrypt;
                echo "<br>";
                echo "Decrypt : ".$decrypt;
                break;
        }
    }
}
