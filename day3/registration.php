<html>
<head>
<style>  
      body {background:  #EFA215;} 
 </style>  
<title>Registation</title>
</head>
<body>
<form action="form.php" method ="POST">
<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
<u><caption><b>User Registration Form</b></caption> </u>
<br/>
<tr>
<th>Enter your first name</th>
<td><input type="text" name="fn" id="fn1" maxlength="10" title="enter your first name" placeholder="enter your first name" required/></td>
</tr>
<tr>
<th>Enter your last name</th>
<td><input type="text" name="ln"/></td>
</tr>
<tr>
<th>Enter your password</th>
<td><input type="password"/></td>
</tr>
<tr>
<th>ReEnter your password</th>
<td><input type="password" name="pwd"/></td>
</tr>
<tr>
<th>Enter your email</th>
<td><input type="email" name="email" /></td>
</tr>
<tr>
<th>Enter your mobile</th>
<td><input type="number" name="m1"/></td>
</tr>

<tr>
      <th>Age</th>
	  <td><input type="number" name="n1" /></td>
	  </tr>
	  
<tr>
<th>Enter your address</th>
<td><textarea name="address"rows="8" cols="20"></textarea></td>
</tr>

<tr>
<th>Select your DOB</th>
<td><input type="date" name="d"/></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Save My Data"/>
<input type="reset" value="Reset Data"/>
</td>
</tr>
</table>
</form>
</body>
</html>