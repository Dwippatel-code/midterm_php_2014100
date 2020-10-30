<?php
    
    include 'PHP/PHPFUNCTIONS.php';
    
    createPageHeader("MY BOOK SHOP");
    shuffle($advertisingBook);
    echo '<br><br><img class="advertising" src="'.$advertisingBook[0].'">';
    HomeSection();
    createPageFooter();
    
   ?>