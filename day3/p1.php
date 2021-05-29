<html>
<head>
<style>  
      body {background:  pink;} 
 </style>  
<title>Student Marksheet</title>
</head>
<body>
<form name="f1" action="p2.php" method ="POST">
<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
<u><caption><b><h1>Student Marksheet</h1></b></caption> </u>
<br/>
<tr>
<td>Enter Student name</td>
<td><input type="text" name="fn" id="fn1" maxlength="10" title="enter your first name" placeholder="enter your first name" required/></td>
</tr>
<tr>
<td>Enter enrollment number</td>
<td><input type="text" name="en" size="10"/></td>
</tr>

<tr>
      <td>Branch</td>
	  
	  <td>
	      <select name="ch1">
		  <option>IT</option>
	      <option>COMPUTER</option>
		  <option>CIVIL</option>
	  </select>
	  </td>
	  </tr>
	  
	  <tr>
<td>C</td>
<td><input type="text" name="txt3" size="15"/></td>
</tr>

<tr>
<td>C++</td>
<td><input type="text" name="txt4" size="15"/></td>
</tr>

<tr>
<td>JAVA</td>
<td><input type="text" name="txt5" size="15"/></td>
</tr>

<tr>
<td>PHP</td>
<td><input type="text" name="txt6" size="15"/></td>
</tr>

<tr>
<td>ANDROID</td>
<td><input type="text" name="txt7" size="15"/></td>
</tr>
	 
	  <td colspan="2" align="center">
	  <input type="submit" name="b1" value="OK"/>
    <input type="reset"    name="b2"  value="Reset"/>
	</td>
	</table>
</form>
</body>
</html>