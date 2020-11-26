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
//Variables Input
$productInput = "";
$fnameInput = "";
$lnameInput = "";
$cityInput = "";
$commentInput = "";
$priceInput = "";
$queInput = "";
//array 
$purchasesData=array();
$fieldInput = 0;
//char size 
define('CHAR_SIZE', 10);

//condition  Validation 			
if (isset($_POST['submit'])) {
    

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
    
    
    if (strlen(htmlspecialchars($_POST["inputfname"])) > CHAR_SIZE + 10) {
        $fnameError = "<br>The first name contains more than 20 ";
        $fnameInput = null;
        $fnameInput = null;
    } else if (strlen(htmlspecialchars($_POST["inputfname"])) == 0) {
        $fnameError = "<br>The first name cannot be empty ";
    } else {
        $purchasesData["inputfname"] = ($_POST["inputfname"]);
    }
    
    
    if (strlen(htmlspecialchars($_POST["inputlname"])) > CHAR_SIZE + 10) {
        $lnameError = "<br>The last name contains more than 20 ";
    } else if (strlen(htmlspecialchars($_POST["inputlname"])) == 0) {
        $lnameError = "<br>The last name cannot be empty ";
    } else {
        $purchasesData["inputlname"] = ($_POST["inputlname"]);
    }
    
    
    if (strlen(htmlspecialchars($_POST["city"])) > CHAR_SIZE - 2) {
        $cityError = "<br>The city contains more than 8 characters ";
    } else if (strlen(htmlspecialchars($_POST["city"])) == 0) {
        $cityError = "<br>The city cannot be empty ";
    } else {
        $purchasesData["city"]  = ($_POST["city"]);  
    }

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
    

  //jason file to store data in the txt file 
    if ($productError == "" && $fnameError == "" && $lnameError == "" && $cityError == "" && $commentError == "" && $priceError == "" && $queInput == "") {
      
        
//        $purchasesData["productId"] = $productInput;
//        $purchasesData["fName"] = $fnameInput;
//        $purchasesData["lName"] = $lnameInput;
//        $purchasesData["city"] = $_POST["city"];
//        $purchasesData["comment"] = $commentInput;
//        $purchasesData["queInput"] = $queInput;
//        for ($index = 0; $index < count($sendData); $index++) {
//            if (!(is_null($sendData[$index]))) {
//                array_push($sendData[$index]);
//            }
//        }
        $jsonfile = json_encode($purchasesData,true);//json encode
        define("FILE_EOL", "\r\n");
        $file = fopen("Data\purchases.txt", "a");//declare txt file
        fwrite($file,','.FILE_EOL. $jsonfile);//write 
        fclose($file);//close
        header('Location:buying.php');
      
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
        <td>Product no: </td>
    <td><input type="text" name='inputproduct' value="<?php echo $productInput; ?>"  size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $productError; ?> </font></strong></td>
    </tr>

    <tr>
    <td>First name :</td>
    <td><input type='text' name='inputfname' value="<?php echo $fnameInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $fnameError; ?></font></strong></td>
    </tr>

    <tr>
    <td>Last name :</td>
    <td><input type='text' name='inputlname' value="<?php echo $lnameInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $lnameError; ?></font></strong></td>
    </tr>

    <tr>
    <td>City :</td>
    <td><input type='text' name='city' value="<?php echo $cityInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $cityError; ?></font></strong></td>
   </tr>

    <tr>
   <td> Comment :</td>
    <td><input type='text' name='comment' value="<?php echo $cityInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $cityError; ?></font></strong></td>
   </tr>

    <tr>
    <td>Price :</td>
    <td><input type='number' name='price' id='price' size="12" style="font-size:13pt;font-weight:bold;"> </td>
   <td> <strong><font color=#CC0000>*<?php echo $priceError; ?></font></strong></td>
    </tr>

    <tr>
   <td> Quantity :</td>
    <td><input type='number' name='quc' id="quc" size="12" style="font-size:13pt;font-weight:bold;"> </td>
    <td><strong><font color=#CC0000>*<?php echo $qucError; ?></font></strong></td>
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

