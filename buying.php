<?php

include 'PHP/PHPFUNCTIONS.php';

createPageHeader("Book");

//---------- Variables -----------------------------------
$productError = "";
$fnameError = "";
$lnameError="";
$cityError="";
$commentError="";
$priceError="";
					
$productInput = "";
$fnameInput = "";
$lnameInput="";
$cityInput="";
$commentInput="";
$priceInput="";
$fieldInput = 0;
						
//---------- Data Validation -----------------------------				
if(isset($_POST['submit'])){
if(empty($_POST['inputproduct'])){
	$fieldError = "Error: Enter the right Product No. !";
    }else{
	$Input = $_POST['inputproduct'];
    }
                                                
if(empty($_POST['inputfname'])){
    $fnameError = "Error: First NAme can't be empty !";
}else{
    $fnameInput =$_POST['inputfname'];
    }
                                             
if(empty($_POST['inputlname'])){
    $lnameError = "Error: Last Name can't be empty !";
}else{
    $lnameInput =$_POST['inputlname'];
}
                                                
if(empty($_POST['city'])){
    $lnameError = "Error: City can't be empty !";
}else{
	$lnameInput =$_POST['city'];
}
                                            
if(empty($_POST['comment'])){
    $commentError = "Error: Comment can't be empty !";
}else{
    $commentInput =$_POST['comment'];
}
					
                                               
if(empty($_POST['price'])){
    $commentError = "Error: Comment can't be empty !";
}else{
    $commentInput =$_POST['price'];
    }
						
                                                
 if(($_POST['quc'])){
    $commentError = "Error: Quentity can't be empty !";
}else{
    $commentInput =$_POST['quc'];
}
$selectInput  = $_POST['unit'];
}
?>    
        
 <form id="form">
			
Product no: 
<input type="text" name='inputproduct' value="<?php echo $productInput;?>"  size="12" style="font-size:13pt;font-weight:bold;"> 
<strong><font color=#CC0000>*<?php echo $productError;?>
</font></strong>
   <br /><br />
   
First name :
<input type='text' name='inputfname' value="<?php echo $fnameInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
<strong><font color=#CC0000>*<?php echo $fnameError;?></font></strong>
<br /><br />

Last name :
<input type='text' name='inputlname' value="<?php echo $lnameInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
<strong><font color=#CC0000>*<?php echo $lnameError;?></font></strong>
<br /><br />

City :
<input type='text' name='city' value="<?php echo $cityInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
<strong><font color=#CC0000>*<?php echo $cityError;?></font></strong>
<br /><br />

Comment :
<textarea rows="5" cols="80" name="comment"><?php echo $commentInput; ?></textarea>
<strong><font color=#CC0000>*<?php echo $commentError;?></font></strong>
<br /><br />

Price :
<input type='text' name='price' value="<?php echo $priceInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
<strong><font color=#CC0000>*<?php echo $priceError;?></font></strong>
<br /><br />

Quantity :
<input type='text' name='quc' value="<?php echo $priceInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
<strong><font color=#CC0000>*<?php echo $priceError;?></font></strong>
<br /><br />


<input  type="submit" name="submit" value='Submit' style="font-size:16pt;font-weight:bold;float:center; color:black;" > 						
</form> 

<?php
createPageFooter();
?>

