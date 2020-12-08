<?php
include 'PHP/PHPFUNCTIONS.php';

createPageHeader("Book","");

//Variables error
$productError = "";
$fnameError = "";
$lnameError = "";
$cityError = "";
$commentError = "";
$priceError = "";
$qucError = "";

//array 
$purchasesData=array();
$fieldInput = 0;
//char size 
define('CHAR_SIZE', 10);

//condition  Validation 			
if (isset($_POST['submit'])) {
    
/*
    if ((strlen(htmlspecialchars($_POST["inputproduct"])) > CHAR_SIZE + 2)) {
        $CodeError = "<br>The product code contains more than 10 ";
        $productInput = "";
        $productInput = null;
    } else if (strlen(htmlspecialchars($_POST["inputproduct"])) == 0) {

        $CodeError = "<br>The product code cannot be empty ";
        $productInput = "";
        $productInput = null;
    } elseif ((!preg_match("/^p/", ($_POST["inputproduct"]))) && (!preg_match("/^P/", ($_POST["inputproduct"])))) {
        $CodeError = "<br>The should start with P or p ";
        $productInput = "";
        $productInput = null;
    } else {
        $purchasesData["inputproduct"] = ($_POST["inputproduct"]);
    }
    
  */  
    $fnameError = customer::setFirstname(htmlspecialchars($_POST["fname"]));
    
    $lnameError= customer::setLastname(htmlspecialchars($_POST["lname"]));
    $passwordError= customer::setPassword(htmlspecialchars($_POST["password"]));
 
    $cityError= customer::setCity(htmlspecialchars($_POST["city"]));
    $addressError = customer::setAddress(htmlspecialchars($_POST["address"]));
    $provinceError= customer::setprovince (htmlspecialchars($_POST["province"]));
    $postalCodeError = customer::setPostalcode(htmlspecialchars($_POST["postalcode"]));
/*
    if (strlen(htmlspecialchars($_POST["comment"])) > CHAR_SIZE * 20) {
        $commentsError = "<br>The comments contains more than 200 ";
    } else if (strlen(htmlspecialchars($_POST["comment"])) == 0) {
        $commentsError = "<br>The comments cannot be empty ";
    } else {
        $purchasesData["comment"] = ($_POST["comment"]);
    }
    
    if (($_POST["price"] < 0) && ($_POST["price"] >= 10000)) {
        
        $priceError = "<br>The product price cannot be more than 10000 and cannot be less than 0 ";
    } else if (strlen(htmlspecialchars((int)$_POST["price"])) == 0) {
        $priceError = "<br>The product price cannot be empty ";
    } else {
     $purchasesData["price"] = ((int)$_POST["price"]);
    }
    
    if (((int)$_POST["quc"] < 0) && ((int)$_POST["quc"] > 10000)) {
        $qucError = "<br>The product quantity cannot be more than 10000 and cannot be less than 0 ";
    } else if (strlen(htmlspecialchars((int)$_POST["quc"])) == 0) {
        $qucError = "<br>The product quantity cannot be empty ";
    } else {
        $purchasesData["quc"] = ((int)$_POST["quc"]);
    }
    */

  //jason file to store data in the txt file 
    if ($productError == "" && $fnameError == " " && $lnameError == "" && $cityError == "" && $commentError == "" && $priceError == "" && $queInput == "") {
      
        
      
        exit();
    }
}
?>    
<div align="center">
<form action="buying.php" method="POST">	
<br>
<table>
<!--    from-->
    

    <tr>
    <td>First name :</td>
    <td><input type='text' name='fname' value="<?php echo $_POST["fname"]; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $fnameError; ?></font></strong></td>
    </tr>

    <tr>
    <td>Last name :</td>
    <td><input type='text' name='lname' value="<?php echo $_POST["lname"]; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $lnameError; ?></font></strong></td>
    </tr>

    <tr>
        <td>Address : </td>
    <td><input type="text" name='address' value="<?php echo $_POST["address"]; ?>"  size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $productError; ?> </font></strong></td>
    </tr>
    
    <tr>
    <td>City :</td>
    <td><input type='text' name='city' value="<?php echo $_POST["city"]; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $cityError; ?></font></strong></td>
   </tr>

   <tr>
        <td>Postal code : </td>
    <td><input type="text" name='postalcode' value="<?php echo $_POST["Postalcode"]; ?>"  size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $productError; ?> </font></strong></td>
    </tr>
   
    <tr>
   <td> Username :</td>
    <td><input type='text' name='username' value="<?php echo $_POST["username"]; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $usernameError; ?></font></strong></td>
   </tr>

   
   <tr>
   <td> Password :</td>
    <td><input type='password' name='password' value="<?php echo $_POST["password"]; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $passwordError; ?></font></strong></td>
   </tr>
    

  

   

<tr>
<td><input  type="submit" name="submit" value='Submit' style="font-size:16pt;font-weight:bold;float:center; color:black;" > </td>	
<td> </td>
<td><input  type="reset" name="Reset" value='Reset' style="font-size:16pt;font-weight:bold;float:center; color:black;" > </td>
</tr>		
  <a href="cheat_sheet.txt" download>Download File cheat sheet</a>
</table>
    </form> 
</div>
<?php
createPageFooter();
?>

