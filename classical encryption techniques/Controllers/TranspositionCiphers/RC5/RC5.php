<?php


class RC5
{

    private $magic;

    function __construct()
    {
        $this->magic = "3l337";
    }

    function encrypt($data, $pwd = false)
    {
        $pwd = !$pwd ? $this->magic : $pwd;
        $key[] = '';
        $box[] = '';

        $pwd_length = strlen($pwd);
        $data_length = strlen($data);

        for ($i = 0; $i < 256; $i++) {
            $key[$i] = ord($pwd[$i % $pwd_length]);
            $box[$i] = $i;
        }

        for ($j = $i = 0; $i < 256; $i++) {
            $j = ($j + $box[$i] + $key[$i]) % 256;
            $tmp = $box[$i];
            $box[$i] = $box[$j];
            $box[$j] = $tmp;
        }

        $cipher = '';

        for ($a = $j = $i = 0; $i < $data_length; $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $box[$a]) % 256;

            $tmp = $box[$a];
            $box[$a] = $box[$j];
            $box[$j] = $tmp;

            $k = $box[(($box[$a] + $box[$j]) % 256)];
            $cipher .= chr(ord($data[$i]) ^ $k);

        }

        return ($cipher);

    }


    function decrypt($data, $pwd = false)
    {
        $pwd = !$pwd ? $this->magic : $pwd;
        return RC5::encrypt($data, $pwd);
    }

}