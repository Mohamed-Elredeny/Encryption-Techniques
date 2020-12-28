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
        <input type="submit" value="Encrypt" name="SelectTechnique">
    </form>
</center>

</body>

<script type="text/javascript">
    function showDiv(){
        var technique = document.getElementById('technique').value;
        if(technique == 'CaesarCipher'){
            document.getElementById('CaesarCipher').style.display= 'block';
        }
       // alert(technique);
    }
</script>
</html>