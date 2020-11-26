<?php
    include 'PHP/PHPFUNCTIONS.php';
    //for change the color
    if(isset($_GET['command'])&& htmlspecialchars($_GET['command'])=="print")
    {
    createPageHeader("BOOKP","changeBody");
    }
    else
    {
        createPageHeader("BookP", "");
    }
    
    HomeSection();

 $purchasesData= json_decode('['.file_get_contents('purchases.txt').']',true);
 //var_dump($purchasesData); 
 $tax=0.15;
 //table  for show the recod of user enter for product

     echo "<table border='1'>";
     echo "<tr> <td> Product_Number </td>";
    
     echo "<td> Customer_First_Name</td>";
     echo "<td> Customer_Last_Name</td>";
     echo "<td> City</td>";
     echo "<td> Comment</td>";
     echo "<td> Price </td>";
     
     echo "<td> Quantity</td>";
     echo "<td> Sub_Total </td>";
     
     echo "<td> Tax </td>";

     echo "</tr>";
 

    foreach ($purchasesData as $key =>$value)
{
   
   
    echo "<tr>";
    echo "<td>".$value['inputproduct']."</td>";
    echo "<td>".$value['inputfname']."</td>";
    echo "<td>".$value['inputlname']."</td>";
    echo "<td>".$value['city']."</td>";
    echo "<td>".$value['comment']."</td>";
    echo "<td>".$value['price']."</td>";
    echo "<td>".$value['quc']."</td>";
    
    echo"<td>".$purchasesData[0]["price"]*$purchasesData[0]["quc"]."<br>";
    echo"<td>".($purchasesData[0]["price"]*$purchasesData[0]["quc"])*$tax."<br>";
   
    echo "</tr>";      
    
}
echo "</table>";

?>
  
<?php
    createPageFooter(); 
?> 

<!--var_dump code of the data
array(4) { [0]=> array(7) { ["inputproduct"]=> string(6) "p21211" ["inputfname"]=> string(4) "dwip" ["inputlname"]=> string(5) "patel" ["city"]=> string(8) "montreal" ["comment"]=> string(5) "qwert" ["price"]=> int(12) ["quc"]=> int(4) } [1]=> array(7) { ["inputproduct"]=> string(6) "p21211" ["inputfname"]=> string(4) "dwip" ["inputlname"]=> string(5) "patel" ["city"]=> string(8) "montreal" ["comment"]=> string(5) "qwert" ["price"]=> int(66) ["quc"]=> int(4) } [2]=> array(7) { ["inputproduct"]=> string(6) "p12345" ["inputfname"]=> string(4) "abhi" ["inputlname"]=> string(5) "patel" ["city"]=> string(8) "vadodara" ["comment"]=> string(11) "abcdefghijk" ["price"]=> int(33) ["quc"]=> int(2) } [3]=> array(7) { ["inputproduct"]=> string(7) "p434334" ["inputfname"]=> string(4) "abhi" ["inputlname"]=> string(4) "loda" ["city"]=> string(8) "montreal" ["comment"]=> string(4) "echo" ["price"]=> int(55) ["quc"]=> int(3) } }-->