<form action="" method="post" name="myForm" onsubmit="return validateForm();" >
<table >
<tr>
<th width="178" scope="row"><label for="name">User Name:</label></th>
<td width="8"><input type="text" name="m_name" /></td>
</tr>
<tr>
<th scope="row"><label for="email">Email Address:</label></th>
<td> <input type="text" name="m_email" /></td>
</tr>
<tr>
<th scope="row"><label for="confirm_email">Confirm Email Address:</label></th>
<td><input type="text" name="c_email" /></td>
</tr>
<tr>
<th scope="row"><label for="firstname">First Name:</label></th>
<td><input type="text" name="m_firstname"/></td>
</tr>
<tr>
<th scope="row"><label for="lastname">Last Name:</label></th>
<td><input type="text" name="m_lastname"/></td>
</tr>
<tr>
<th scope="row"><label for="sex">Sex:</label></th>
<td><select name="m_sex">
<option value="male">Male</option>
<option value="female">Female</option>
</select></td>
</tr>
<tr>
<th scope="row">Zip Code:</th>
<td><input type="text" name="m_zip"/></td>
</tr>
<tr>
<th scope="row"><label for="age"></label></th>
<td><input type="checkbox" name="age" value="18"/> 18 Years Old</td>
</tr>
<tr>
<th scope="row"><label for="receieve_cupon"></label></th>
<td><input type="checkbox" name="coupons" value="Received"/> Recieved Cupon</td>
</tr>
<tr>
<th scope="row"></th>
<td><input type="submit" name="submit" value="Register"/></td>
</tr>
</table>
</form>


<?php
//the php insert part
//include('connection.php');
if(isset($_REQUEST['submit'])){
//extract($_REQUEST);
print_r($_REQUEST);
/*mysql_query("INSERT into member_user SET m_name='$m_name',m_email='$m_email',m_password='',m_firstname='$m_firstname',m_lastname='$m_lastname',m_sex='$m_sex',m_zip='$m_zip',m_age='$age',m_receievecupon='$coupons'") or die(mysql_error());
echo "Insert data Sucessfully";*/

}
?>