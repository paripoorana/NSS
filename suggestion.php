<?PHP include("header.html")
?>
<head>
<style>
.content
{
height:550px;
width:1290px;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.c
{
height:200px;
width:1290px;
}
.donate
{
height:200px;
width:400px;
float:right;
font-size:24px;
color:floralwhite;
}
.donate li a
{
color:floralwhite;
text-decoration:underline wavy floralwhite 3px;
}
.donate a:hover
{
color:red;
}
.suggestion
{
color:floralwhite;
height:550px;
width:1000px;
marign:left;
text-align:center;
font-size:24px;
}
</style>
<body>
<div class="img">
<center><img src="img/suggest.jpg" width="400" height="300"></center></div>
<div class="content">
<div class="c">
<div class="link">
<span class="donate"><br>
<p style="font-family:cursive">Suggest you to collabrate with us...</p>
<li><a href="blood_donation.php">blood donation form</a></li><br>
<img src="img/donate.png" width="290" height="300">
</div>
<div class="suggestion">
<form method="POST" action="member.php">
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
<label>Contact No.:</label>
<input type="tel" maxlength="10" name="stu_contact">
<br><br>
<label>Your Suggestion:</label>
<textarea name="stu_suggestion" col="30" rows="10"></textarea>
<br><br>
<button type="submit">SUBMIT</button>
<input type="reset" name="reset" value="CANCEL">
</form>
</div>
</body>
<?PHP include("footer.html")
?>
