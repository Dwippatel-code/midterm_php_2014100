<?php
    include 'PHP/PHPFUNCTIONS.php';
    
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
     echo "<td> Total </td>";
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