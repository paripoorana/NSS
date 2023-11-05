<?PHP include("header.html")
?>
<head>
<style>
.content
{
height:500px;
width:1280px;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.register
{
height:450px;
width:395px;
margin-left:auto;
margin-right:auto;
text-align:center;
font-size:24px;
color:floralwhite;
}
.donate
{
height:200px;
width:400px;
float:left;
font-size:24px;
}
.donate1
{
height:200px;
width:400px;
float:right;
font-size:24px;
}
</style>
<body>
<div class="img">
<center><img src="img/apply.jpg"></center></div>
<div class="content">
<span class="donate"><br><br><br><br>
<img src="img/tree.png" width="400" height="250">
</span>
<span class="donate1"><br><br><br><br>
<img src="img/tree.png" width="400" height="250">
</span>
<div class="register">
<form method="POST" action="student.php">
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
<label>Academic Year:</label>
<input type="text" name="academic_year">
<br><br>
<label>Email:</label>
<input type="email" name="stu_email">
<br><br>
<label>Contact No.:</label>
<input type="tel" maxlength="10" name="stu_contact">
<br><br>
<button type="submit">SUBMIT</button>
<input type="reset" name="reset" value="CANCEL">
</form>
</div>
</div>
</body>
<?PHP include("footer.html")
?>