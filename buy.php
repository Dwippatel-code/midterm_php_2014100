<?php
include 'PHP/PHPFUNCTIONS.php';
include 'objects/purchase.php';


$purchase = new purchase();
$product = new product();


$productError = "";
$CommentError = "";
$quentityError = "";
$subtotalError = "";
$taxesError = "";
$grandtotalError = "";

if (isset($_POST["submit"])) {

    $product->load(htmlspecialchars($_POST['product_id']));


    $product_uuid = $product->getProduct_uuid();
    $description = $product->getDescription();
    $price = $product->getPrice();

    $commentError = $purchase->setComment(htmlspecialchars($_POST['comment']));
    $quantityError = $purchase->setQuantity(htmlspecialchars($_POST['quantity']));
    $subtotalError = $purchase->setSubtotal($price, $purchase->getQuantity());
    $taxesError = $purchase->setTaxes($price, $quantity);
    $grandtotalError = $purchase->setGrandtotal($price, $quantity);





    #check if all data are valid
    if ($commentError == "" && $grandtotalError == "" && $quantityError == "" && $subtotalError == "" && $taxesError == "") {
        #noity user that data are valid and stored properly
        $message = "You have purchased item Successfully! \n Thank you for shopping with us!";

        $message="Product Code: ".$product_uuid." Product: " .$description." Price: ".$price." Quantity: ". $purchase->getQuantity() . " SubTotal: " . $purchase->getSubtotal() . " Taxes: ". $purchase->getTaxes() ." GrandTotal " . $purchase->getGrandtotal() . " * ";
      
    }
}
createPageHeader("BUY","");

?>

        <div align="center">
            <form action="buy.php" method="POST">	
                <br>
                <table>
                    <tr>
                    <?php
                    $products = new products();
                    echo "<td> <select  name='product_id'>";
                    foreach ($products->items as $row) {
                        echo "<option value='" . $row->getProduct_id() . "'>" . $row->getProductCode() . " - " . $row->getDescription() . "</option>";
                    }
                    echo "</select></td> ";
                    ?>

                    </tr>
                    <tr>
                        <td>Comment :</td>
                        <td><input type='text' name='comment' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
                        <td><strong><font color=#CC0000>*<?php echo $CommentError; ?></font></strong></td>
                    </tr>

                    <tr>
                        <td>Quantity :</td>
                        <td><input type='text' name='quentity' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
                        <td><strong><font color=#CC0000>*<?php echo $quentityError; ?></font></strong></td>
            </tr>

            <tr>
                <td><input  type="submit" name="submit" value='Submit' style="font-size:16pt;font-weight:bold;float:center; color:black;" > </td>	
                <td> </td>
                <td><input  type="reset" name="Reset" value='Reset' style="font-size:16pt;font-weight:bold;float:center; color:black;" > </td>
            </tr>		
            
        </table>
    </form> 
</div>
<?php
    createPageFooter();
?>