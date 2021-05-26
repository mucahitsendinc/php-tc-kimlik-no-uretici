<?php 
function tc_uret(){
  $tc="";
  while(strlen($tc)<=11){
    $random = rand(0, 9)."";
    if (strlen($tc) == 0 && $random != 0) {
      $tc.=$random;
    }else if(strlen($tc)==10){
      if ((((($tc[0] + $tc[2] + $tc[4] + $tc[6] + $tc[8]) * 7) - (($tc[1] + $tc[3] + $tc[5] + $tc[7])))%10)==$tc[9]) {
        $sonislem=0;
        for ($i=0; $i < 10; $i++) { 
          $sonislem=$tc[$i]+$sonislem;
        }
        $tc.=($sonislem%10);
        return $tc;
      }else{
        return tc_uret();
      }
    }else if (strlen($tc)>0) {
      $tc.=$random;
    }
  }
  return $tc;
}

for ($i=0; $i < 10; $i++) {
  $uretilen_tc = tc_uret();
  echo $uretilen_tc . "<br>";
}
/*
* Algoritması : 
* 1) 11 karakter olmak zorunda
* 2) 2 4 6 8 basamaklı sayıları toplayıp 1 3 5 7 9 numaralı basamaktaki sayıların toplamının 7 ile çarpılmış halinden
*   çıkardıp 10 a böldüğümüzde kalan sayı 10. basamak olmak zorunda
* 3) 10. basamağa kadar tüm sayıları toplayıp 10 a böldüğümüzda kalan sayı 11. basamak olmak zorunda
* Mücahit Sendinç github:mucahitsendinc
*/
?>
