<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            display: none;
        }
        form{
            margin-top: 100px;
        }
    </style>
</head>
<body>
<center>
    <form action="../Interfaces/interface.php" method="post">
        <select name="technique" id="technique" onchange="showDiv()">
            <option value="CaesarCipher">CaesarCipher</option>
            <option value="PlayFairCipher">PlayFairCipher</option>
            <option value="MonoalphabeticCipher">MonoalphabeticCipher</option>
            <option value="RC5">RC5</option>
            <option value="RC6">RC6</option>
            <option value="Viginener">Viginener</option>
        </select>

        <div id="CaesarCipher">
            <table>
                <tr>
                    <td>
                        plainText
                    </td>
                    <td>
                        <input type="text" name="plainText">
                    </td>
                </tr>
                <tr>
                    <td>
                        digit
                    </td>
                    <td>
                        <input type="text" name="digit">

                    </td>
                </tr>
            </table>

        </div>
        <div id="MonoalphabeticCipher">
            <table>
                <tr>
                    <td>
                        plainText
                    </td>
                    <td>
                        <input type="text" name="plainText">
                    </td>
                </tr>
                <tr>
                    <td>
                        digit
                    </td>
                    <td>
                        <input type="text" name="digit">

                    </td>
                </tr>
            </table>

        </div>
        <div id="PlayFairCipher">
            <table>
                <tr>
                    <td>
                        plainText
                    </td>
                    <td>
                        <input type="text" name="plainText">
                    </td>
                </tr>
                <tr>
                    <td>
                        digit
                    </td>
                    <td>
                        <input type="text" name="digit">

                    </td>
                </tr>
            </table>

        </div>
        <div id="RC5">
            <table>
                <tr>
                    <td>
                        Data
                    </td>
                    <td>
                        <input type="text" name="data">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="text" name="password">

                    </td>
                </tr>
            </table>

        </div>
        <div id="Viginener">
            <table>
                <tr>
                    <td>
                        input
                    </td>
                    <td>
                        <input type="text" name="input">
                    </td>
                </tr>
                <tr>
                    <td>
                        key
                    </td>
                    <td>
                        <input type="text" name="key">

                    </td>
                </tr>
            </table>

        </div>


        <input type="submit" value="Encrypt" name="SelectTechnique">
    </form>
</center>

</body>

<script type="text/javascript">
    function showDiv(){
        var technique = document.getElementById('technique').value;
        if(technique == 'CaesarCipher'){
            document.getElementById('CaesarCipher').style.display= 'block';
            document.getElementById('MonoalphabeticCipher').style.display= 'none';
            document.getElementById('PlayFairCipher').style.display= 'none';
            document.getElementById('RC5').style.display= 'none';

        }else if(technique == 'MonoalphabeticCipher'){
            document.getElementById('MonoalphabeticCipher').style.display= 'block';
            document.getElementById('CaesarCipher').style.display= 'none';
            document.getElementById('PlayFairCipher').style.display= 'none';
            document.getElementById('RC5').style.display= 'none';
            document.getElementById('RC6').style.display= 'none';
            document.getElementById('Viginener').style.display= 'none';

        }else if(technique == 'PlayFairCipher'){
            document.getElementById('PlayFairCipher').style.display= 'block';
            document.getElementById('MonoalphabeticCipher').style.display= 'none';
            document.getElementById('CaesarCipher').style.display= 'none';
            document.getElementById('RC5').style.display= 'none';
            document.getElementById('RC6').style.display= 'none';
            document.getElementById('Viginener').style.display= 'none';

        }else if(technique == 'RC5'){
            document.getElementById('RC5').style.display= 'block';
            document.getElementById('PlayFairCipher').style.display= 'none';
            document.getElementById('MonoalphabeticCipher').style.display= 'none';
            document.getElementById('CaesarCipher').style.display= 'none';
            document.getElementById('RC6').style.display= 'none';
            document.getElementById('Viginener').style.display= 'none';


        }else if(technique == 'RC6'){
            document.getElementById('RC6').style.display= 'block';
            document.getElementById('RC5').style.display= 'none';
            document.getElementById('PlayFairCipher').style.display= 'none';
            document.getElementById('MonoalphabeticCipher').style.display= 'none';
            document.getElementById('CaesarCipher').style.display= 'none';
            document.getElementById('Viginener').style.display= 'none';

        }else if(technique == 'Viginener'){
            document.getElementById('Viginener').style.display= 'block';
            document.getElementById('RC6').style.display= 'none';
            document.getElementById('RC5').style.display= 'none';
            document.getElementById('PlayFairCipher').style.display= 'none';
            document.getElementById('MonoalphabeticCipher').style.display= 'none';
            document.getElementById('CaesarCipher').style.display= 'none';
        }
       // alert(technique);
    }
</script>
</html>