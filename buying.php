<?php
include 'PHP/PHPFUNCTIONS.php';

createPageHeader("Book");

//---------- Variables -----------------------------------
$productError = "";
$fnameError = "";
$lnameError = "";
$cityError = "";
$commentError = "";
$priceError = "";
$qucError = "";

$productInput = "";
$fnameInput = "";
$lnameInput = "";
$cityInput = "";
$commentInput = "";
$priceInput = "";
$queInput = "";
$purchasesData=array();
$fieldInput = 0;
define('CHAR_SIZE', 10);

//---------- Data Validation -----------------------------				
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
        $productInput = ($_POST["inputproduct"]);
    }
    if (strlen(htmlspecialchars($_POST["inputfname"])) > CHAR_SIZE + 10) {
        $fnameError = "<br>The first name contains more than 20 ";
        $fnameInput = null;
        $fnameInput = null;
    } else if (strlen(htmlspecialchars($_POST["inputfname"])) == 0) {
        $fnameError = "<br>The first name cannot be empty ";
    } else {
        $fnameInput = ($_POST["inputfname"]);
    }
    if (strlen(htmlspecialchars($_POST["inputfname"])) > CHAR_SIZE + 10) {
        $lnameError = "<br>The last name contains more than 20 ";
    } else if (strlen(htmlspecialchars($_POST["inputfname"])) == 0) {
        $lnameError = "<br>The last name cannot be empty ";
    } else {
        $lnameInput = ($_POST["inputfname"]);
    }
    if (strlen(htmlspecialchars($_POST["city"])) > CHAR_SIZE - 2) {
        $cityError = "<br>The city contains more than 8 characters ";
    } else if (strlen(htmlspecialchars($_POST["city"])) == 0) {
        $cityError = "<br>The city cannot be empty ";
    } else {
        $cityInput = ($_POST["city"]);
    }

    if (strlen(htmlspecialchars($_POST["comment"])) > CHAR_SIZE * 20) {
        $commentsError = "<br>The comments contains more than 200 ";
    } else if (strlen(htmlspecialchars($_POST["comment"])) == 0) {
        $commentsError = "<br>The comments cannot be empty ";
    } else {
        $commentInput = ($_POST["comment"]);
    }
    if (((int)$_POST["price"] > 0) && ((int)$_POST["price"] <= 10000)) {
        $priceError = "<br>The product price cannot be more than 10000 and cannot be less than 0 ";
    } else if (strlen(htmlspecialchars((int)$_POST["price"])) == 0) {
        $priceError = "<br>The product price cannot be empty ";
    } else {
        $priceInput = ((int)$_POST["price"]);
    }
    if (((int)$_POST["quc"] > 0) && ((int)$_POST["quc"] < 10000)) {
        $qucError = "<br>The product quantity cannot be more than 10000 and cannot be less than 0 ";
    } else if (strlen(htmlspecialchars((int)$_POST["quc"])) == 0) {
        $qucError = "<br>The product quantity cannot be empty ";
    } else {
        $queInput = ((int)$_POST["quc"]);
    }
    if ($productError == "" && $fnameError == "" && $lnameError == "" && $cityError == "" && $commentError == "" && $priceError == "" && $queInput == "") {
        header('Location:buying.php');
        $purchasesData = Array($productInput, $fnameInput, $lnameInput, $cityInput, $commentInput, $queInput);
//        for ($index = 0; $index < count($sendData); $index++) {
//            if (!(is_null($sendData[$index]))) {
//                array_push($sendData[$index]);
//            }
//        }
        $jsonfile = json_encode($purchasesData);
        $file = fopen("purchases.txt", "a");
        fwrite($file, json_encode($jsonfile, true));
        fclose($file);
        exit();
    }
}
?>    
<form action="buying.php"  align="  " method="POST">	

    Product no: 
    <input type="text" name='inputproduct' value="<?php echo $productInput; ?>"  size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $productError; ?>
        </font></strong>
    <br /><br />


    First name :
    <input type='text' name='inputfname' value="<?php echo $fnameInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $fnameError; ?></font></strong>
    <br /><br />

    Last name :
    <input type='text' name='inputlname' value="<?php echo $lnameInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $lnameError; ?></font></strong>
    <br /><br />

    City :
    <input type='text' name='city' value="<?php echo $cityInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $cityError; ?></font></strong>
    <br /><br />

    Comment :
    <input type='text' name='comment' value="<?php echo $cityInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $cityError; ?></font></strong>
    <br /><br />


    Price :
    <input type='number' name='price' value="<?php echo $priceInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $priceError; ?></font></strong>
    <br /><br />

    Quantity :
    <input type='number' name='quc' value="<?php echo $queInput; ?>" size="12" style="font-size:13pt;font-weight:bold;"> 
    <strong><font color=#CC0000>*<?php echo $qucError; ?></font></strong>
    <br /><br />


    <input  type="submit" name="submit" value='Submit' style="font-size:16pt;font-weight:bold;float:center; color:black;" > 						
</form> 

<?php
createPageFooter();
?>

