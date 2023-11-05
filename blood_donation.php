<?PHP include("header.html")
?>
<head>
<style>
.donate
{
color:floralwhite;
height:550px;
width:1280px;
margin-left:auto;
margin-right:auto;
text-align:center;
font-size:24px;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
</style>
<body>
<div class="img">
<center><img src="img/blood.png" width="" height="400"></center>
<div class="donate">
<form method="POST" action="donar.php">
<br><br>
<label>Name:</label>
<input type="text" name="stu_name">
<br><br>
<label>Regno:</label>
<input type="text" name="stu_regno">
<br><br>
<label>Branch:</label>
<input type="text" name="stu_branch">
<br><br>
<label>Gender:</label>
<select name="stu_gender">
<option>Select</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
<br><br>
<label>Blood Group:</label>
<select name="stu_blood">
<option>Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="others">Others</option>
</select>
<br><br>
<label>Are you willing to donate blood:</label>
<input type="radio" name="stu_yes">yes 
<input type="radio" name="stu_yes">no 
<br><br>
<label>Contact No.:</label>
<input type="tel" maxlength="10" name="stu_contact1">
<br><br>
<label>Alternative Contact No.:</label>
<input type="tel" maxlength="10" name="stu_contact2">
<br><br>
<button type="submit">SUBMIT</button>
<input type="reset" name="reset" value="CANCEL">
</form>
</div>
</body>
<?PHP include("footer.html")
?>