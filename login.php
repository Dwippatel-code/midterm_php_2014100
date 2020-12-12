<?php
include 'PHP/PHPFUNCTIONS.php';
createPageHeader("Book", "");

//variable error
$usernameError = "";
$passwordError = "";

//variable input
$usernameInput = "";
$passwordInput = "";


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $primaryKey = get_Password($username, $password);
}
?>
<div align="center">
    <form action="login.php" method="POST">	
        <br>
        <table>
            <!-- login from-->
            <tr>
                <td>Username : </td>
                <td><input type="text" name='username' value=""  size="12" style="font-size:13pt;font-weight:bold;"> </td>
                <td><strong><font color=#CC0000>*<?php echo $usernameError; ?> </font></strong></td>
            </tr>

            <tr>
                <td>Password :</td>
                <td><input type='password' name='password' value="" size="12" style="font-size:13pt;font-weight:bold;"> </td>
                <td><strong><font color=#CC0000>*<?php echo $passwordError; ?></font></strong></td>
            </tr>

            <tr>
                <td><input  type="submit" name="submit" value='Submit' style="font-size:16pt;font-weight:bold;float:center; color:black;" > </td>	
                <td> </td>

            </tr>		

        </table>
    </form> 
</div>
<?php
createPageFooter();
?>