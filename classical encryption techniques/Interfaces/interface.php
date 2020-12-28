<?php
require_once '../Controllers/Substitution Ciphers/CaesarCipher/CaesarCipher.php';
require_once '../Controllers/Substitution Ciphers/PlayFairCipher/PlayFairCipher.php';
require_once '../Controllers/Substitution Ciphers/MonoalphabeticCipher/MonoalphabeticCipher.php';

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
                break;
            case 'MonoalphabeticCipher':
                break;

        }
    }
}
