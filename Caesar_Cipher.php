<?php

$ptext = "HELLO";
$shift = 2;

function encrypt($ptext, $s)
{
$result = "";
for ($i = 0; $i < strlen($ptext); $i++)
{

  if (ctype_upper($ptext[$i]))
        $result = $result.chr((ord($ptext[$i]) +$s - 65) % 26 + 65);
   else
        $result = $result.chr((ord($ptext[$i]) +$s - 97) % 26 + 97);

    }
    return $result;
}

echo "Plaintext  : " . $ptext;
echo "\nCiphertext : " . encrypt($ptext, $shift);
?>
