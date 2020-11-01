<?php
    include 'PHP/PHPFUNCTIONS.php';
    
    createPageHeader("BOOKP");
    
    HomeSection();
  //  $file = fopen("purchases.txt", "a");
//   var_dump(json_decode($file));
   
   //var_dump(json_decode('purchases.txt',true));
  
 $purchasesData= json_decode(file_get_contents('purchases.txt',true));
 var_dump($purchasesData); 
//$jsonfile= file_get_contents('purchases.txt');
//$purchasesData= json_decode($jsonfile,true);
    
    createPageFooter();
 ?>