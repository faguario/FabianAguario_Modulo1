<?php
echo "<h3>Tu texto a traducir es:</h3>";
echo ($_POST["traduccion"]); 
echo "<h3>Tu texto traducido es: </h3>"; 
$trad = $_POST["traduccion"];

  for ( $pos=0  ; $pos < strlen($trad); $pos ++) {
   $letra = substr($trad, $pos);
   
    if (ord($letra) == 97) { 
      echo ".-";
    }
    if (ord($letra) == 98) {  
      echo "-...";
    }
    if (ord($letra) == 99) { 
      echo "-.-.";
    } 
    if (ord($letra) == 100) {  
      echo "-..";
    }
    if (ord($letra) == 101) { 
      echo ".";
    } 
    if (ord($letra) == 102) {  
      echo "..-.";
    }
    if (ord($letra) == 103) { 
      echo "--.";
    }
    if (ord($letra) ==  104) {  
      echo "....";
    }
    if (ord($letra) == 105) {  
      echo "..";
    }
    if (ord($letra) == 106) {  
      echo ".---";
    }
    if (ord($letra) == 107) {  
      echo "-.-";
    }
    if (ord($letra) == 108) {  
      echo ".-..";
    }
    if (ord($letra) == 109) {  
      echo "--";
    }
    if (ord($letra) == 110) {  
      echo "-.";
    }
    if (ord($letra) == 111) {  
      echo "---";
    }
    if (ord($letra) == 112) {  
      echo ".--.";
    }
    if (ord($letra) == 113) {  
      echo "--.-";
    }
    if (ord($letra) == 114) {  
      echo ".-.";
    }
    if (ord($letra) == 115) {  
      echo "...";
    }
    if (ord($letra) == 116) {  
      echo "-";
    }
    if (ord($letra) == 117) {  
      echo "..-";
    }
    if (ord($letra) == 118) {  
      echo "...-";
    }
    if (ord($letra) == 119) {  
      echo ".--";
    }
    if (ord($letra) == 120) {  
      echo "-..-";
    }
    if (ord($letra) == 121) {  
      echo "-.--";
    }
    if (ord($letra) == 121) {  
      echo "--..";
    }
    if (ord($letra) == 33) {  
      echo "--..--";
    }
    if (ord($letra) == 46) {  
      echo ".-.-.-";
    }
    if (ord($letra) == 44) {  
      echo "-.-.--";
    }
    if (ord($letra) == 63) {  
      echo "..--..";
    }
    if (ord($letra) == 34) {  
      echo ".-..-.";
    }
    if (ord($letra) == 48) {  
      echo "-----";
    }
    if (ord($letra) == 49) {  
      echo ".----";
    }
    if (ord($letra) == 50) {  
      echo "..---";
    }
    if (ord($letra) == 51) {  
      echo "...--";
    }
    if (ord($letra) == 52) {  
      echo "....-";
    }
    if (ord($letra) == 53) {  
      echo ".....";
    }
    if (ord($letra) == 54) {  
      echo "-....";
    }
    if (ord($letra) == 55) {  
      echo "--...";
    }
    if (ord($letra) == 56) {  
      echo "---..";
    }
  }
  ?>