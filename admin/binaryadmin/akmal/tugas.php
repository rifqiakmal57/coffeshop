<?
class Rumus{  
      public function hitung_luas($panjang,$lebar)  
      {  
      $luas=$panjang*$lebar;  
      return $luas;  
      }  
 }  

 //membuat obyek
 $obj = new Rumus;  

 //menampilkan hasil dari obyek hitung_luas
 echo $obj->hitung_luas(50,30);  
 
 ?>  