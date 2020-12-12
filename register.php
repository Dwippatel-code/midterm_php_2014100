<?php
include 'PHP/PHPFUNCTIONS.php';
include 'objects/customer.php';
createPageHeader("Book","");

//Variables error
$fnameError = "";
$lnameError = "";
$cityError = "";
$provinceError = "";
$usernameError = "";
$passwordError = "";
$postalCodeError="";
$addressError="";

//array 
$fieldInput = 0;
//char size 
define('CHAR_SIZE', 10);

//condition  Validation 			
if (isset($_POST['submit'])) {
    

   $customer= new customer();
    $fnameError = $customer->setFirstname(htmlspecialchars($_POST["fname"]));
    $usernameError=$customer->setUsername(htmlspecialchars($_POST["username"]));
    $lnameError= $customer->setLastname(htmlspecialchars($_POST["lname"]));
    $passwordError= $customer->setPassword(htmlspecialchars($_POST["password"]));
 
    $cityError= $customer->setCity(htmlspecialchars($_POST["city"]));
    $addressError = $customer->setAddress(htmlspecialchars($_POST["address"]));
    $provinceError= $customer->setprovince (htmlspecialchars($_POST["province"]));
    $postalCodeError = $customer->setPostalcode(htmlspecialchars($_POST["postalcode"]));

    if ( $fnameError == " " && $lnameError == " " && $addressError == " " && $cityError == " " && $provinceError == " " && $postalCodeError == " " && $usernameError == " " && $passwordError == " ") {
        $customer->save();
    }
}
?>    
<div align="center">
    <form action="register.php" method="POST">	
<br>
<table>
<!--    from-->
    

    <tr>
    <td>First name :</td>
    <td><input type='text' name='fname' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $fnameError; ?></font></strong></td>
    </tr>

    <tr>
    <td>Last name :</td>
    <td><input type='text' name='lname' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $lnameError; ?></font></strong></td>
    </tr>

    <tr>
        <td>Address : </td>
    <td><input type="text" name='address' value=""  size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $addressError; ?> </font></strong></td>
    </tr>
    
    <tr>
    <td>City :</td>
    <td><input type='text' name='city' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $cityError; ?></font></strong></td>
   </tr>

   <tr>
        <td>Province : </td>
    <td><input type="text" name='province' value=""  size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $provinceError; ?> </font></strong></td>
    </tr>
   
   <tr>
        <td>Postal code : </td>
    <td><input type="text" name='postalcode' value=""  size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $postalCodeError; ?> </font></strong></td>
    </tr>
   
    <tr>
   <td> Username :</td>
    <td><input type='text' name='username' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $usernameError; ?></font></strong></td>
   </tr>

   
   <tr>
   <td> Password :</td>
    <td><input type='password' name='password' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
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
//createPageFooter();
?>

