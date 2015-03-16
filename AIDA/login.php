<?php 
session_start(); 

// Check if we have already created a authenticated session 

if (isset($_SESSION["authenticatedUserEmail"])) { 

$_SESSION["message"] = "You are already logged in as ". $_SESSION['authenticatedUserEmail']; 
} 
?> 

<head> 
<title>Login Page</title> 
</head> 
<body> 
<h2>Login Page</h2> 
<?php 
echo "<h3><font color=red>".$_SESSION['message']."</font></h3>"; //Output any the error message - 
?> 

<!-- Display the Table and the Form --> 

<table width="76%" border="0"> 
<tr> 
<td height="77" valign="top"> 
<form method="post" action="loginaction.php"> 
<table width="628" height="75"  border="0" cellpadding="1" cellspacing="0"> 
<tr> 
<td width="214">Email</td> 
<td width="243"><input type="text" size=40 maxlength=40 name="email"></td> 
<td>(aid@leedsbeckett.ac.uk)</td> 
</tr> 
<tr> 
<td>Password:</td> 
<td><input type="password" size=10 maxlength=10 name="password"></td> 
<td width="165"> (leeds)</td> 
</tr> 
<tr> 
<td >&nbsp;</td> 
<td><p> 
<input name="submit" type="submit" value="Log in"> 
</td> 
</tr> 
</table> 
</form></td> 
<td>&nbsp;</td> 
</tr> 
</table> 
<p>&nbsp;</p> 
</body> 
</html>