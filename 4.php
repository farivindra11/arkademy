<?php
//find duplicates
$str = "hari apa saja saya bisa!";
$strArray = count_chars($str,1);

foreach ($strArray as $key=>$value)
   {  
   echo "karakter <b>'".chr($key)."'</b> ditemuka $value kali <br>";
   }
echo "<br>";
echo "<br>";

//find duplicates
$strr = "cepat kerjakan!!!";
$strArrayy = count_chars($strr,1);

foreach ($strArrayy as $keys=>$values)
   {
   echo "karakter <b>'".chr($keys)."'</b> ditemuka $values kali <br>";
   }   

?>