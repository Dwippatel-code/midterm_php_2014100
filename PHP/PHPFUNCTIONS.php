<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//declare the folder for the images and pages 
define('FOLDER_IMAGES', 'images/');
define('FOLDER_LOGO', FOLDER_IMAGES."logo.jpg");
define('FOLDER_BOOK1', FOLDER_IMAGES."h1.jpg");
define('FOLDER_BOOK2', FOLDER_IMAGES."h2.jpg");
define('FOLDER_BOOK3', FOLDER_IMAGES."h3.jpg");
define('FOLDER_BOOK4', FOLDER_IMAGES."f1.jpg");
define('FOLDER_BOOK5', FOLDER_IMAGES."f2.jpg");
define('FOLDER_BOOK6', FOLDER_IMAGES."f3.jpg");
define('PAGE_INDEX', 'index.php');
define('PAGE_BUYING', 'buying.php');
define('PAGE_ORDER', 'order.php');
define('FILE_CSS', 'css/style.css');//css 
//advertising  image and it will change every time when it is refresh
$advertisingBook = array(FOLDER_BOOK1,FOLDER_BOOK2,FOLDER_BOOK3,FOLDER_BOOK4,FOLDER_BOOK5,FOLDER_BOOK6);

//function header for the header for all pages
//and it help for change the color for the web page  while using  [?commmand=print]
    function createPageHeader($Title, $bodyChange){
        
        ?><html>
            <head>
             <meta charset="UTF-8">
                <title><?php echo $Title; ?></title>
                <link rel="stylesheet" href="<?php echo FILE_CSS?>"   >
            </head>
            <body class="<?php echo $bodyChange;?>">
                <?php
                displayLogo();
                displayNavigationMenu();
                
    }
    //function gallery to show photo in web pages 
    function gallery(){
       ?> 
<!--      list for the image to show in gallery-->
        <div class="gallery">
        <a target="_blank" href="<?php echo FOLDER_BOOK1 ?>">
          <img src="<?php echo FOLDER_BOOK1 ?>" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="des">Book 1</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="<?php echo FOLDER_BOOK2 ?>">
          <img src="<?php echo FOLDER_BOOK2 ?>" alt="Forest" width="600" height="400">
        </a>
        <div class="des">Book 2</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="<?php echo FOLDER_BOOK3 ?>">
          <img src="<?php echo FOLDER_BOOK3 ?>" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="des">Book 3</div>
      </div>
              
      <div class="gallery">
        <a target="_blank" href="<?php echo FOLDER_BOOK4 ?>">
          <img src="<?php echo FOLDER_BOOK4 ?>" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="des">Book 4</div>
      </div>
      <div class="gallery">
        <a target="_blank" href="<?php echo FOLDER_BOOK5 ?>">
          <img src="<?php echo FOLDER_BOOK5 ?>" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="des">Book 5</div>
      </div>
      <div class="gallery">
        <a target="_blank" href="<?php echo FOLDER_BOOK6 ?>">
          <img src="<?php echo FOLDER_BOOK6 ?>" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="des">Book 6</div>
      </div>
<?php
    }
    //function for set footer in webpages
    function createPageFooter(){
       ?>
                
                <div class="footer">
                    <?php displayCopyright()?>
                </div>
            </body>
        </html>
        <?php
    }
    
    //function for logo 
    function displayLogo(){
        echo'<div class="header">';
        echo'<img src="'.FOLDER_LOGO.'" ></a>';
        echo'<h1 ><span class="highlight">MY BOOK</span> SHOP</h1>';
    }
    
    //function for copyright text
    function displayCopyright(){
        echo'<br><br><div id="copyright"><h3>&copy; DWIPKUMAR  (2014100) '.date("Y").'</h3></div>';
    }
    
    //function for display navigation bar
    function displayNavigationMenu(){
                        

        echo '<div class="header-right">';
        echo '&nbsp;<a href="'.PAGE_INDEX.'">HOME</a>';
        echo '&nbsp;<a href="'.PAGE_BUYING.'">BUYING</a>';
        echo '&nbsp;<a href="'.PAGE_ORDER.'">ORDER</a>';
        echo '</div>';
        echo '</div>';
        }
    //function for text in web-page
    function HomeSection(){
        
        echo '<div style="padding-center:20px">';
        
       
        echo '<p></p>';
        echo '</div>';
    }
    
    